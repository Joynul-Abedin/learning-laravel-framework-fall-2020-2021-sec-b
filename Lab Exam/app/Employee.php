<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
   	//protected $table = 'user_table';
	protected $primaryKey = "id";
	public $timestamps = false;

	//const CREATED_AT = "create_time";
	//const UPDATED_AT = "update_time";
}
