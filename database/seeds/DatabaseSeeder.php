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

        $keys = ['nombre','siteID','latitude','longitude','desborde','seguridad','observacion','ajuste','control','capacidad'];

        \app\Embalse::create(['nombre' => 'Carite','siteID' => 50039995,'latitude' => 18.07524,'longitude' => -66.10683,
        'desborde' => 544, 'seguridad' => 542,'observacion' => 539,'ajuste' => 537,'control' => 536, 'capacidad' => 8320]);

        \app\Embalse::create(['nombre' => 'Carraizo','siteID' => 50059000,'latitude' => 18.32791,'longitude' => -66.01628,
            'desborde' => 41.14, 'seguridad' => 39.5,'observacion' => 38.5,'ajuste' => 36.5,'control' => 30, 'capacidad' => 1200]);

        \app\Embalse::create(array_combine($keys,['La Plata',50045000,18.343,-66.23607,51,43,39,38,31,26516]));

        \app\Embalse::create(array_combine($keys,['Cidra',50047550,18.1969,-66.14072,403.05,401.05,400.05,399.05,398.05,4480]));

        \app\Embalse::create(array_combine($keys,['Patillas',50093045,18.01774,-66.0185,67.07,66.16,64.33,60.52,59.45,9890]));

        \app\Embalse::create(array_combine($keys,['Toa Vaca',50111210,18.10166,-66.48902,161,152,145,139,133,50650]));

        \app\Embalse::create(array_combine($keys,['Rio Blanco',50076800,18.22389,-65.78142,28.75,26.5,24.25,22.5,18,3795]));

        \app\Embalse::create(array_combine($keys,['Caonillas',50026140,18.27654,-66.65642,252,248,244,242,235,31730]));

        \app\Embalse::create(array_combine($keys,['Fajardo',50071225,18.2969,-65.65858,52.5,48.3,43.4,37.5,26,4430]));

        \app\Embalse::create(array_combine($keys,['Guajataca',50010800,18.39836,-66.9227,196,194,190,186,184,33340]));

        \app\Embalse::create(array_combine($keys,['Cerrillos',50113950,18.07703,-66.57547,173.4,160,155.5,149.4,137.2,42600]));
    }
}
