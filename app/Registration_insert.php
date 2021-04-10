<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration_insert extends Model
{
    //
    protected $table = 'registrations';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'email_id', 'fname', 'lname', 'gender', 'phone_no', 'password',
	];
}
