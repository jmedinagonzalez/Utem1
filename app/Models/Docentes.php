<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docentes extends Model {

protected $table = 'docentes';
protected $fillable =['nombres','apellidos'];

public function ()
{
	return $this->belongsTo('departamentos');
}

public function cursos()
{
	return $this->belongsTo('Cursos');
}
}
