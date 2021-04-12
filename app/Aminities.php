<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aminities extends Model
{
    //
    protected $table = 'amenitiess';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'fa_code',
	];

	//
}
