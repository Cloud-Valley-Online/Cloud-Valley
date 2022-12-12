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
    public $thread; //Pass to Policy for authorization on post.

    protected $rules = [
        'post' => 'required',
    ];

    /**
     * Mounting thread var to grab the current thread ID.
     */
    public function mount(Thread $thread)
    {
        $this->thread = $thread;
    }

    public function render()
    {
        return view('livewire.thread-quick-reply');
    }

    public function save(Request $request)
    {

        $this->authorize('canPost', $this->thread);

        $this->validate();

        session()->flash('message', 'Post successful.');

        $post = Post::create([
            'forum_id' => $this->thread->forum_id,
            'thread_id' => $this->thread->id,
            'post_text' => $this->post,
            'post_author' => Auth::id(),
            'post_author_ip_address' => $request->ip(),
        ]);

    }
}
