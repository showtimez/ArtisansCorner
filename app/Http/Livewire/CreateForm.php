<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class CreateForm extends Component
{
    use WithFileUploads;
    public $category;
    public $title, $description, $price, $state;


    public function store() {


        $this->validate([
            'category' => 'required',
            'state'


        ]);



        $user = Auth::user();
        $category = Category::find($this->category);

        $article = $category->articles()->create([

            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'state' => $this->state,
            'user_id' => $user->id,
        ]);
        session()->flash('articleCreated', 'Congratulazioni! Hai inserito un annuncio!');
        $this->reset();
    }

    public function render()
    {

        // $this->categories = ['pittura', 'scultura', 'fotografia', 'design', 'grafica', 'architettura', 'musica', 'fumetti', 'cartoni', 'videogames'];
        return view('livewire.create-form');
    }
}
