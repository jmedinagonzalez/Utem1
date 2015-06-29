<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoSalas extends Model {

protected $table = 'tipo_salas';
protected $fillable = ['nombre'];
public function salas()
{
 	return $this->hasMany('Salas');
}
}
