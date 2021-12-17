<?php

namespace Database\Seeders;

use App\Models\creditcard;
use App\Models\User;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        creditcard::create([
            'number' => '4546-8574-1856-5565',
            'expire' => '2021-12-17',
            'sald' => 20000,
            'cvv' => '123',
            'user_id' => User::first()->id
        ]);
    }
}
