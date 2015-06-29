<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignaturas extends Model {


protected $table = 'asignaturas';
protected $fillable = ['nombre','codigo'];

public function departamentos()
{

	return $this->belongsTo('Departamentos');
}

public function cursos()
{
	return $this->hasMany('Cursos');
}
}