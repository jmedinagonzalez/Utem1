<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Escuelas extends Model {
protected $table = 'escuelas';
protected $fillable = ['nombre'];

public function departamentos()
{
	return $this->belongsTo('Departamentos');
}
public function carreras()
{
	return $this->hasMany('Carrera');
}
}
