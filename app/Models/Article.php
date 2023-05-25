<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Article extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [


        'title',
        'price',
        'description',
        'state',
        'user_id',
        'category_id'
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
        $category = $this->category;

        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'state' => $this->state,
        ];

        return $array;
    }


}
