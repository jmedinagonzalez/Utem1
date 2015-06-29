<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salas extends Model {

protected $table = 'salas';
protected $fillable = 'nombre';
public function tipos_salas()
{
	return $this->belongsTo('TipoSalas');
	
}

public function campus()
{
	return $this->belongsTo('Campus');
}

public function horarios()
{
	return $this->hasMany('Horarios');
}
}
