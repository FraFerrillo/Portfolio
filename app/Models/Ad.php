<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Ad extends Model
{
    use Searchable;
    use HasFactory;
    protected $fillable = ['title','body','user_id','category_id','price','is_accepted'];

    public function toSearchableArray()
    {
        $array =[
            'id'=> $this->id,
            'title'=> $this->title,
            'body'=> $this->body,
            'price'=> $this->price,
        ];
        return $array;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    static public function ToBeRevisionedCount()
    {
        return Ad::where('is_accepted', null)->count();
    }

    public function images()
    {
        return $this->hasMany(AdImage::class);
    }

}

