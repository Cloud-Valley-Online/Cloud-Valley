<?php

namespace App\Http\Controllers\Forum;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\ThreadTags;
use App\Models\Forum;
use App\Models\Thread;
use App\Models\Post;
use App\Models\PollOptions;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Show the forums on main page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forum.forum_index', [
            'forums' => Forum::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Store a newly created thread on the forum.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storethread(Request $request)
    {
        $forum = Forum::findOrFail($request->input('forum_id'));

        $response = Gate::inspect('createthread', $forum);

        $request->validate([
            'subject' => 'required|max:80',
            'tags' => 'required|max:50',
            'post' => 'required:max:5000',
        ]);

        if ($response->allowed()) {
            //Sanitize title & Tags.
            $tags = seperateKeywordsFromTags($request->input('tags'));
            $cleaned_string = cleanString($request->input('subject'));

            //Check poll and return newly created thread.
            if ($request->input('poll-question')) {
                $thread = $this->handleThreadPoll($request, $forum->id, $cleaned_string);
            } else {
                //Thread created without a poll.
                $thread = Thread::create([
                    'forum_id' => $forum->id,
                    'thread_author' => Auth::id(),
                    'thread_subject' => $request->input('subject'),
                    'thread_subject_clean' => $cleaned_string,
                    'last_reply_date' => now(),
                    'last_poster_id' => Auth::id(),
                ]);
            }

            $post = Post::create([
                'forum_id' => $forum->id,
                'thread_id' => $thread->id,
                'post_text' => $request->input('post'),
                'post_author' => Auth::id(),
                'post_author_ip_address' => $request->ip(),
            ]);

            //Insert tags.
            foreach ($tags as $tag) {
                if (!empty($tag)) {
                    ThreadTags::create([
                        'tag' => $tag,
                        'thread_id' => $thread->id
                    ]);
                }
            }

            //Increment counts for the forum.
            $forum = Forum::where('id', $forum->id);
            $forum->increment('forum_post_count', 1,);
            $forum->increment('forum_thread_count', 1,);

            return redirect("forum/{$thread->forum->forum_name_clean}/{$thread->id}/{$thread->thread_subject_clean}#post.{$post->id}")
                ->with('message', "Thread successfully posted! You've earned x coins.");
        } else {
            abort(403, $response->message());
        }

        return view('forum.components.compose');
    }

    /**
     * Handiling my TERRIBLE poll logic. <-- Need to improve greatly!!
     *
     * @param Illuminate\Http\Request $request
     * @param integer $forum_id
     * @param string $cleaned_string
     * return App\Models\Thread $thread
     */
    private function handleThreadPoll(Request $request, $forum_id, $cleaned_string)
    {
        //Thread created with a poll.
        $thread = Thread::create([
            'forum_id' => $forum_id,
            'thread_author' => Auth::id(),
            'thread_subject' => $request->input('subject'),
            'thread_subject_clean' => $cleaned_string,
            'last_reply_date' => now(),
            'last_poster_id' => Auth::id(),
            'poll_title' => $request->input('poll-question'),
        ]);


        for ($count = 0; $count <= 10; $count++) {
            if (!empty($request->input("option{$count}"))) {
                PollOptions::create([
                    'thread_id' => $thread->id,
                    'poll_option_text' => $request->input("option{$count}"),
                    'poll_option_total' => 0, //Redundant, remember to remove as it's default(0) now
                ]);
            }
        }

        return $thread;
    }

    /**
     * Show the threads on the forum specified.
     *
     * @param  int $forum_id
     * @param  int $forum_name
     * @return \Illuminate\Http\Response|View
     */
    public function show($forum_id, $forum_name)
    {
        //$threads = Thread::factory()->count(100)->create(); //Generate 100 fake threads.

        $forum = Forum::findOrFail($forum_id);

        //Verify route is using a sanitized URI for SEO purposes.
        if ($forum->forum_name_clean == $forum_name) {

            return view('forum.forum_threads', [
                'threads' => $forum->threads()->orderBy('thread_announced', 'desc')
                    ->orderBy('thread_stuck', 'desc')
                    ->orderBy('last_reply_date', 'desc')
                    ->paginate(25)
            ]);
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forum $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum)
    {
        //
    }
}
