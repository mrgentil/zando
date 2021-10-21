<?php

namespace App\Http\Livewire;

use App\Comment;
use App\Post;
use Livewire\Component;

class BlogComment extends Component
{
    public $name;
    public $email;
    public $content;
    public $postId;

    public function mount($postId)
    {
        $this->postId = $postId;
    }
    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'min:3|max:15|string',
            'email' => 'email|max:100',
            'content' => 'min:3'
        ]);
    }

    public function submit()
    {
        $this->validate([
            'name' => 'min:3|max:15|string',
            'email' => 'email|max:100',
            'content' => 'min:3'
        ]);

        Comment::query()->create([
            'name' => $this->name,
            'email' => $this->email,
            'content' => $this->content
        ]);


        session()->flash('success', 'Commentaire ajouté avec succès');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.blog-comment', [
            'comments' => (Post::query()->with('comments')
                ->where('id', $this->postId)->firstOrFail())->comments
        ]);
    }
}
