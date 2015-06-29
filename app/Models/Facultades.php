<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facultades extends Model {

	protected $table = 'facultades';
	protected $fillable = ['nombre'];

	public function campus()
	{
		return $this->belongsTo('Campus');
	}

	public function departamentos()
	{
		return $this->hasMany('Departamentos');
	}

}
