<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periodos extends Model {

protected $table = 'periodos';
protected $fillable = ['bloque'];
public function horarios()
{
	return $this->hasMany('Horarios');
}
}
