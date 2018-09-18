<?php

namespace App;

use Carbon;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';   

    protected $fillable = ['title', 'pictureThumb', 'content'];



    public function getCreatedAtAttribute($date)
	{
    	return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y');
	}

	public function getUpdatedAtAttribute($date)
	{
    	return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d-m-Y');
	}

}
