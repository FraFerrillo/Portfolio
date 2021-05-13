<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;
    protected $fillable = ['title','body','user_id','category_id','price','is_accepted'];

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

}

