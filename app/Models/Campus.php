<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model {

	protected $table = 'Campus';
	protected $fillable = ['nombre','direccion'];

	public function facultades()
	{
      return $this->hasMany('Facultades');
	}

	public function salas()
	{
		return $this->hasMany('Salas');
	}

}
