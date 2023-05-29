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
    
    public $temporary_images;
    public $images = [];
    public $image;
    public $category;
    public $title, $description, $state;

    public $article;

    public $user_id;
    public $price;

    protected $rules = [
        'category' => 'required',
        'title' => 'required',
        'description' => 'required',
        'price' => 'required',
        'state' => 'required',
        'user_id' => 'required',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',
    ];

    public function store()
    {

        $this->user_id = Auth::user()->id;
        $this->validate();
        // $category = Category::find($this->category);
        // dd(Category::find($this->category)->articles);
        Category::find($this->category)->articles()->create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'state' => $this->state,
            'user_id' => $this->user_id,
        ]);
        // dd($category, $this->title, $this->description, $user, $this->price);
        // $this->article = $category->articles()->create([
        //     'title' => $this->title,
        //     'description' => $this->description,
        //     'price' => $this->price,
        //     'state' => $this->state,
        //     'user_id' => $user
        // ]);
        session()->flash('articleCreated', "Congratulazioni il tuo annuncio è stato inserito ed è in attesa di revisione");
        $this->reset();
    }

    public function render()
    {

        // $this->categories = ['pittura', 'scultura', 'fotografia', 'design', 'grafica', 'architettura', 'musica', 'fumetti', 'cartoni', 'videogames'];
        return view('livewire.create-form');
    }
}
