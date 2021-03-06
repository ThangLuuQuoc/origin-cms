<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tabUser';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'id', 'full_name', 'login_id', 'email', 'password', 'role', 'status', 'email_confirmed', 
		'email_confirmation_code', 'first_login', 'created_at', 'updated_at'
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];
}