<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model {

	//
public function carreras()
{
	return $this->belongsTo('Carreras');
}

public function asignaturas_cursadas()
{
	return $this->hasMany('AsignaturasCursadas');
}
}
