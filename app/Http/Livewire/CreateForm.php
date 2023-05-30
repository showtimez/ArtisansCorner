<?php

namespace App\Http\Livewire;

use App\Models\Image;
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
        // Remove this line if it's not needed
        //'user_id' => 'required',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',
    ];

    public function mount()
    {
        $this->images = [];
        $this->temporary_images = [];
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function store()
    {
        // Validate the input data
        $this->validate();

        // Create a new Article instance
        $article = new Article;

        // Fill the Article instance with the input data
        $article->fill([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'state' => $this->state,
            'user_id' => Auth::id(),
            'category_id' => $this->category,
        ]);

        // Save the Article instance
        $article->save();

        // Check if temporary_images is not null
        if ($this->temporary_images) {
            // Loop through the temporary_images array
            foreach ($this->temporary_images as $temporary_image) {
                // Create a new Image instance
                $image = new Image;

                // Store the uploaded image and set the path attribute
                $image->path = $temporary_image->store('images', 'public');

                // Associate the Image instance with the Article instance
                $image->article()->associate($article);

                // Save the Image instance
                $image->save();
            }
        }

        // Reset the input data
        $this->reset();
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
