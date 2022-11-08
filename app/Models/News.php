<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class News extends Model
{
    use HasFactory;
     protected $table='news';
    public function posts()
    {
        return $this->belongsTo(Post::class,  'post_id'); // links this->id to events.course_id
    }

}
