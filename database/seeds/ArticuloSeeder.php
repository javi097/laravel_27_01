<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Articulo;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        //Borramos todos los datos de articulos si tiene;
        DB::table('articulos')->truncate();
        //Rellenamos la tabla con x datos
        factory(Articulo::class, 12)->create();
    }
}
