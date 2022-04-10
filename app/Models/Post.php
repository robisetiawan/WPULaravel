<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $fillable = ['title', 'category_id', 'excerpt', 'body'];

    public function category()
    {
        return $this->belongsTo(Category::class);
        //satu post hanya bisa memliki 1 category
    }
}
