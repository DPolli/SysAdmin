<?php

use App\Models\Pet;
use Illuminate\Database\Seeder;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pet::create([
	        	'nome' => 'Billy',
	        	'idade' => 6,
	        	'raca' => 'Pincher',
	        	'dono' => 'Diogo Polli',
	        	'telefone' => '94182-5051'
	        ]);
	    Pet::create([
	        	'nome' => 'Robinho',
	        	'idade' => 10,
	        	'raca' => 'Pastor Alemão',
	        	'dono' => 'Diogo Polli',
	        	'telefone' => '94182-5051'
	        ]);
    }
}
