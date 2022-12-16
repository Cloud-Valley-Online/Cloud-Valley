<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Post;
use App\Models\Thread;
use App\Models\Forum;

class ThreadQuickReply extends Component
{
    use AuthorizesRequests;

    public $thread;
    public $post;
    public $last_page = 0;

    protected $rules = [
        'post' => 'required|max:5000',
    ];

    /**
     * Mounting thread var to grab the current thread ID.
     * @param App\Models\Thread $thread
     * @param integer $last_page
     * @return Facade Redirect
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

        //Insert post
        $post = Post::create([
            'forum_id' => $this->thread->forum_id,
            'thread_id' => $this->thread->id,
            'post_text' => $this->post,
            'post_author' => Auth::id(),
            'post_author_ip_address' => $request->ip(),
        ]);

        //Update Thread
        Thread::where('id', $this->thread->id)
        ->increment('reply_count', 1, ['last_reply_date' => now(),
                                       'last_poster_id' => Auth::id()]);
        //Update forum
        Forum::where('id', $this->thread->forum->id)
        ->increment('forum_post_count', 1);

        // Putting the timestamp in the URL is required because LW can't tell the page was submitted on reload.
        // See: https://github.com/livewire/livewire/issues/289
        $time = time();
        return redirect("forum/{$this->thread->forum->forum_name_clean}/{$this->thread->thread_subject_clean}/{$this->thread->id}?t={$time}&page={$this->last_page}#post.{$post->id}")
                ->with('message', "Post successful! You've been granted x coins!");
    }
}
