<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horarios extends Model {

protected $table = 'horarios';
public function ()
{
	return $this->belongsTo('periodos');
	
}

public function salas()
 {
 	return $this->belongsTo('salas');
 }
 
 public function cursos()
 {
 	return $this->belongsTo('Cursos');
 }
}
