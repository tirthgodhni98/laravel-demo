<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property_image extends Model
{
    //
    protected $table = 'property_images';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'pro_id', 'image',
	];
}
