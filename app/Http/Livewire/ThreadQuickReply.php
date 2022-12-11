<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class ThreadQuickReply extends Component
{

    public $post;

    public function render()
    {
        return view('livewire.thread-quick-reply');
    }
}
