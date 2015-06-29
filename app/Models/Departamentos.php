<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model {
protected $table =' departamentos';
protected $fillable = ['nombre'];


public function facultades()
{
	return $this->belongsTo('Facultades');
}

public function escuelas()
{
	return $this->hasMany('Escuelas');
}

public function docentes()
{
	return $this->hasMany('Docentes');
}
public function asignaturas()
{
	return $this->hasMany('Asignaturas');
}
public function funcionarios()
{
	return $this->hasMany('Funcionarios');
}
}
