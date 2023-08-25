<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Str;

use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CREO I TAG
        $technologies = ['HTML', 'CSS', 'Javascript','JQuery', 'VueJS', 'Laravel', 'Symfony', 'SASS'];

        // LI CICLO
        foreach($technologies as $item){
            $technology= new Technology();
            $technology->name = $item;
            $technology->slug =Str::slug($item, '-');

            $technology->save();
        }
    }
}
