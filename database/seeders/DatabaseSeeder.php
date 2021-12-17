<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // usuario prueba
        User::create([
            'name' => 'Usuario de prueba',
            'email' => 'usuario@gmail.com',
            'password' => bcrypt('contra123')
        ]);
        // card de prueba
        $this->call(CardSeeder::class);
    }
}
