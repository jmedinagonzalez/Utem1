<?php
use Illuminate\Database\Seeder;
use App\Models\Campus;
class CampusTableSeeder extends Seeder
{
	
	public function run()
	{
		//DB::table('campus')->delete();
		$nombres = ['Macul','Fae','Centro'];
		$direcciones = ['Mi Casa con mi casita','lejoslejos','cerquita'];
		$latitudes = 123;
		$longuitudes = 321;
		$rut_encargados=['17.905.547-3'];
		
		\DB::table('campus')->insert(array(	
            'nombre' => $nombres,
            'direccion' => $direcciones,
            'latitud' => $latitudes

			));
	}
}