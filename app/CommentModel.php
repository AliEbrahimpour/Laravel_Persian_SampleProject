<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
	    protected $table='forum';
    	public $timestamps=false;
        protected $fillable = [
        'name', 'email','phone', 'care','message'
    ];

}

?>