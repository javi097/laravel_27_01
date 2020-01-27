<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Libro;
class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Primero borramos por si ejecutamos el seed varias veces
        //No rellenar la tabla cada vez
        DB::table('libros')->truncate(); // Vacia la tabla
        factory(Libro::class, 10)->create(); //Crea 10 registros
    }
}
