<?php

namespace App\Http\Livewire;

use App\Models\Image;
use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


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
        'description' => 'required|max:250',
        'price' => 'required',
        'state' => 'required',
        // Remove this line if it's not needed
        //'user_id' => 'required',
        'images' => 'max:3',

    ];








    public function updatedTemporaryImages()
{
    if ($this->validate([
        'temporary_images.*' => 'image|max:1024',
    ])) {
        for ($i = 0; $i < 3 ; $i++) {
            $this->images[] = $this->temporary_images[$i];
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
        if ($this->images) {
            // Loop through the temporary_images array
            foreach ($this->images as $temporary_image) {
                // Create a new Image instance
                $image = new Image;
                $newPath = "articles/{$article->id}";
                // Store the uploaded image and set the path attribute
                $image->path = $temporary_image->store($newPath, 'public');

                // Associate the Image instance with the Article instance
                $image->article()->associate($article);

                // Save the Image instance
                $image->save();
                RemoveFaces::withChain([new ResizeImage($image->path , 400 , 300),
                                        new GoogleVisionSafeSearch($image->id),
                                        new GoogleVisionLabelImage($image->id)])->dispatch($image->id);


            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
        session()->flash('articleCreated', 'Articolo creato con successo!');
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
