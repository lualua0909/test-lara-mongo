<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'posts';
    public function show($slug)
    {
        return view('post', [
            'post' => Post::where('slug', '=', $slug)->first()
        ]);
    }
}
