<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model {
protected $table = 'cursos';


public function docentes()
{
	return $this->belongsTo('Docentes');


}
public function asignaturas()
{
		return $this->belongsTo('Asignaturas');
}

public function asignaturas_cursadas()
{
	return $this->hasMany('AsignaturasCursadas');
}

public function horarios()
{
	return $this->hasMany('Horarios');
}
}
