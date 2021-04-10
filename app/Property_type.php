<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property_type extends Model
{
    //
    protected $table = 'property_types';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
	];
}
