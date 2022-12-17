<?php

namespace App\Http\Controllers\Forum;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Models\Forum;
use App\Models\Thread;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new Thread.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($forum_id)
    {
        return view('components.forum.compose');
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
     * Display a thread and it's posts on a forum.
     *
     * @param  string  $forum_name
     * @param  string  $thread_subject
     * @param  int     $thread_id
     * @return \Illuminate\Http\Response
     */
    public function show($forum_name, $thread_id, $thread_subject)
    {
        //$posts = Post::factory()->count(100)->create(); // Generate 100 fake posts

        $thread = Thread::findOrFail($thread_id);

        //Verify route is using a sanitized URI for SEO purposes.
        if($thread->thread_subject_clean == $thread_subject &&
           $thread->forum->forum_name_clean == $forum_name)
        {
            return view('forum.forum_thread_posts', [
                'posts' => $thread->posts()->paginate(15)
            ]);
        }

        else

        {
            abort(404);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread)
    {
        //
    }

     /**
     * Store posts on a thread.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storepost(Request $request)
    {
        $thread = Thread::findOrfail($request->input('thread_id'));

        $request->validate([
            'post' => 'required|max:8000',
        ]);

        $response = Gate::inspect('canPost', $thread);

        if ($response->allowed())

        {

        //Insert post
        $post = Post::create([
            'forum_id' => $thread->forum_id,
            'thread_id' => $thread->id,
            'post_text' => $request->input('post'),
            'post_author' => Auth::id(),
            'post_author_ip_address' => $request->ip(),
        ]);

        //Update Thread
        Thread::where('id', $thread->id)
        ->increment('reply_count', 1, ['last_reply_date' => now(),
                                    'last_poster_id' => Auth::id()]);
        //Update forum
        Forum::where('id', $thread->forum->id)
        ->increment('forum_post_count', 1);

        //Grab pagination last_page --seems inefficent...
        $posts = Post::where('thread_id', $thread->id)->paginate(15);

        return redirect("forum/{$thread->forum->forum_name_clean}/{$thread->id}/{$thread->thread_subject_clean}?page={$posts->lastPage()}#post.{$post->id}")
                ->with('message', "Post successful! You've been granted x coins!");
        }

        else

        {
            abort(403, $response->message());
        }

        return view('forum.components.quick-reply');
    }
}
