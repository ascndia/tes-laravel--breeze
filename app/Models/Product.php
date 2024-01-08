<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	use HasFactory;

	protected $table = 'products';

	protected $fillable = [
		'name',
		'image',
		'category_id',
        	'description',
        	'price',
        	// Add other fields here
   	 ];
}
