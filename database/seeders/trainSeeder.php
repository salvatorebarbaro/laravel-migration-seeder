<?php

namespace Database\Seeders;

use App\Models\train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Generator as Faker;

class trainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // Svuota la tabella prima di inserire nuovi dati
        DB::table('trains')->truncate();
        
        for($i=0;$i<10;$i++)
            {
            train::create([

            
                'Azienda'=>$faker->company,
           'Stazione di partenza'=>$faker->city,
           'Stazione di arrivo'=>$faker->city,
           //dateTimeBetween('-1 day','+1 day',)->format('m-d H:i:s') usato questo perchè ci permette di scegliere l'intervallo di tempo e anche il risultato che voglio in pagina
           'Orario di partenza'=>$faker->dateTimeBetween('-1 day','+1 day',)->format(' H:i:s'),
           'Orario di arrivo'=>$faker->dateTimeBetween('-1 day','+1 day',)->format(' H:i:s'),
           'Codice Treno'=>$faker->unique()->randomNumber(5,true),
           'Numero Carrozze'=>$faker->numberBetween(1,10),
            'In orario'=>$faker->boolean(),
            'Cancellato'=>$faker->boolean(),
            
           

        ]);
        }


    }
}
// punto in cui noi inseriamo i dati per popolare il nostro database