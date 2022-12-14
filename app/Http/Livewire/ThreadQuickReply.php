<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Post;
use App\Models\Thread;

class ThreadQuickReply extends Component
{
    use AuthorizesRequests;

    public $post;
    public $last_page = 0;
    public $thread; //Pass to Policy for authorization on post.

    protected $rules = [
        'post' => 'required',
    ];

    /**
     * Mounting thread var to grab the current thread ID.
     */
    public function mount(Thread $thread, $last_page)
    {
        $this->thread = $thread;
        $this->last_page = $last_page;
    }

    public function render()
    {
        return view('livewire.thread-quick-reply');
    }

    public function save(Request $request)
    {

        $this->authorize('canPost', $this->thread);

        $this->validate();

        $post = Post::create([
            'forum_id' => $this->thread->forum_id,
            'thread_id' => $this->thread->id,
            'post_text' => $this->post,
            'post_author' => Auth::id(),
            'post_author_ip_address' => $request->ip(),
        ]);


        // Putting the timestamp in the URL is required because LW can't tell the page was submitted on reload.
        // See: https://github.com/livewire/livewire/issues/289

        $time = time();
        return redirect("forum/{$this->thread->forum->forum_name_clean}/{$this->thread->thread_subject_clean}/{$this->thread->id}?t={$time}&page={$this->last_page}#post.{$post->id}")->with('message', 'Post successful! Youve been granted x coins!');
        //return redirect()->refresh()->with('message', 'Post successful! Youve been granted x coins!');;
    }
}
