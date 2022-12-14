<?php

namespace App\Http\Controllers\Forum;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($forum_id)
    {
        return view('forum.compose');
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
     * Display the specified resource.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     *
     * Putting the timestamp in the URL is required because LW can't tell the page was submitted on reload.
     * See: https://github.com/livewire/livewire/issues/289
     */
    public function show($forum_name, $thread_subject, $thread_id)
    {
        //$posts = Post::factory()->count(100)->create(); // Generate 100 fake posts

        $thread = Thread::findOrFail($thread_id);

        //Verify route is using correct params.
        if($thread->thread_subject_clean == $thread_subject &&
           $thread->forum->forum_name_clean == $forum_name)
        {
            return view('forum.forum_thread_posts', [
                'posts' => $thread->posts()->paginate(15)->appends(['t' => time()])
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
}
