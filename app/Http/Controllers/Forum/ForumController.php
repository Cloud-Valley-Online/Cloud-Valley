<?php

namespace App\Http\Controllers\Forum;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Forum;
use App\Models\Thread;
use App\Models\Post;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
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

        $validated = $request->validate([
            'subject' => 'required|max:80',
            'tags' => 'required|max:200',
            'post' => 'required:max:5000',
        ]);


        if ($response->allowed())

        {
            $cleaned_string = cleanString($request->input('subject'));

            $thread = Thread::create([
                'forum_id' => $forum->id,
                'thread_author' => Auth::id(),
                'thread_subject' => $request->input('subject'),
                'thread_subject_clean' => $cleaned_string,
                'last_reply_date' => now(),
                'last_poster_id' => Auth::id(),
            ]);

            $post = Post::create([
                'forum_id' => $forum->id,
                'thread_id' => $thread->id,
                'post_text' => $request->input('post'),
                'post_author' => Auth::id(),
                'post_author_ip_address' => $request->ip(),
            ]);

        }

        else

        {
            abort(403, $response->message());
        }

        return view('forum.compose');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show($forum_name, $forum_id)
    {
       //$threads = Thread::factory()->count(100)->create(); //Generate 100 fake threads.

       $forum = Forum::findOrFail($forum_id);

       //Verify route is using correct params.
       if($forum->forum_name_clean == $forum_name)
       {

        return view('forum.forum_threads', [
            'threads' => $forum->threads()->orderBy('thread_announced', 'desc')
                                          ->orderBy('thread_stuck', 'desc')
                                          ->orderBy('last_reply_date', 'desc')
                                          ->paginate(25)
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
