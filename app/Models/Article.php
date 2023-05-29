<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [


        'title',
        'price',
        'description',
        'state',
        'user_id',
        'category_id',
        'image'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function setAccepted($value){
        $this->is_accepted=$value;
        $this->save();
        return true;
    }

    public static function toBeRevisionedCount(){
        return Article::where('is_accepted', null)->count();
    }

    public function toSearchableArray()
{
    $array = [
        'id' => $this->id,
        'title' => $this->title,
        'price' => $this->price,
        'description' => $this->description,
        'state' => $this->state,
        'category' => $this->category->name,
    ];

    return $array;
}

    public function images(){
        return $this->hasMany(Image::class);
    }

}
