<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortUrl extends Model
{
	protected $table = "ShortUrl";
	protected $primaryKey = "shortUrlId";
	public $timestamps = false;
	
}
