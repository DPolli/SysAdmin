<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            	'name' => 'Diogo Polli',
            	'email' => 'diogo.polli@outlook.com',
            	'password' => Hash::make(12345678)
            ]);
        User::create([
                'name' => 'Renata Silva',
                'email' => 're@gmail.com',
                'password' => Hash::make(12345678)
            ]);
    }
}
