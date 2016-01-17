<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //nombre,siteID,latitude,longitude,desborde,seguridad,observacion,ajuste,control,capacidad

        \app\Models\Embalse::create(['nombre' => 'Carraizo']);
    }
}
