<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AsignaturasCursadas extends Model {

protected $table = 'asignaturas_cursadas';

public function estudiantes()
{
	return $this->belongsTo('Estudiantes');
	
}
public function cursos()
{
	return $this->belongsTo('Cursos');
}
}
