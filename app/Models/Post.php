<?php

namespace App\Models;
use Illuminate\Pagination\CursorPaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    public function news(){
        return $this->hasMany(News::class);
    }


    public static function getModalData(){
        return Post::pluck('title');
    }


    public static  function getModalDataById(){
        return Post::orderBy('id')->cursorPaginate(15);
    }
}


