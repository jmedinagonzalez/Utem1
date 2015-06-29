<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model {

	protected $table = 'carreras';
	protected $fillable =['nombre'];
	

public function carreras()
{
	return $this->belongsTo('Carrera');
}
public function estudiantes()
{
	return $this->hasMany('Estudiantes');
}
}
