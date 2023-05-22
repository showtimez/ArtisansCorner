<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class CreateForm extends Component
{
    use WithFileUploads;

    public $category, $title, $description, $price, $image, $state;
    
    public function store() {
        $user = Auth::user();

        $article = $user->articles()->create([
            'category' => $this->category,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'image' => $this->image->store('public/media'),
            'state' => $this->state,
        ]);
        session()->flash('libraryCreated', 'Hai inserito una libreria');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-form');
    }
}
