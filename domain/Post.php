<?php

namespace Domain;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';   

    protected $fillable = ['title', 'pictureThumb', 'content'];


}
