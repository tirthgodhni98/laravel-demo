<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amenities_assing extends Model
{
    //
    protected $table = 'amenities_assings';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'pro_id', 'amenities_id',
	];
	//hello
}
