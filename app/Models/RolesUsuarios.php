<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RolesUsuarios extends Model {

	//
public function roles()
{
	return $this->belongsTo('Roles');
}
}
