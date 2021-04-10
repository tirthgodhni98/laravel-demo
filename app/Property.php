<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    protected $table = 'propertys';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'email_id', 'name', 'property_type', 'rent', 'address', 'city_id', 'map', 'bedroom', 'description', 'washroom',
	];
}
