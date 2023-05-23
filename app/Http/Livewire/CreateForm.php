<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class CreateForm extends Component
{
    use WithFileUploads;
    public $category;
    public $categories = [], $title, $description, $price, $image, $state;
    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:1024',
        ]);
    }

    public function store() {

        $this->validate([
            'category' => 'required|in:pittura,scultura,fotografia,design,grafica,architettura,musica,fumetti,cartoni,videogames',
            'image' => 'required|image|max:1024',

        ]);



        $user = Auth::user();

        $article = $user->articles()->create([
            'category' => $this->category,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'image' => $this->image->store('public/media'),
            'state' => $this->state,

        ]);
        session()->flash('articleCreated', 'Congratulazioni! Hai inserito un annuncio!');
        $this->reset();
    }

    public function render()
    {

        $this->categories = ['pittura', 'scultura', 'fotografia', 'design', 'grafica', 'architettura', 'musica', 'fumetti', 'cartoni', 'videogames'];
        return view('livewire.create-form');
    }
}
