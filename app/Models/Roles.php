<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model {

protected $table = 'roles';
protected $fillable = ['nombre'];
public function roles_usuarios()
{
	return $this->hasMany('RolesUsuarios');
}
}
