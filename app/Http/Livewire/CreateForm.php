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

    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*'=>'image|max:1024',
        ])){
            foreach($this->temporary_images as $image){
                $this->images[]=$image;
            }
        }
    }

    public function removeImage($key){
        if(in_array($key,array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    public function store()
    {   

        $this->article->user()->associate(Auth::user());

        $this->article->save();
        
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
        
        if(count($this->images)){
            foreach($this->images as $image){
                $this->article->images()->create([
                    'path'=>$image->store('images', 'public')
                ]);
            }
        }
        // dd($category, $this->title, $this->description, $user, $this->price);
        // $this->article = $category->articles()->create([
        //     'title' => $this->title,
        //     'description' => $this->description,
        //     'price' => $this->price,
        //     'state' => $this->state,
        //     'user_id' => $user
        // ]);
        session()->flash('articleCreated', "Congratulazioni il tuo annuncio è stato inserito ed è in attesa di revisione");
        $this->reset(); $this->cleanForm();
    }

    public function cleanForm(){
        $this->image='';
        $this->images=[];
        $this->temporary_images=[];

    }

    public function render()
    {

        // $this->categories = ['pittura', 'scultura', 'fotografia', 'design', 'grafica', 'architettura', 'musica', 'fumetti', 'cartoni', 'videogames'];
        return view('livewire.create-form');
    }

}
