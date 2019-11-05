<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder{

    public function run()
    {
        DB::table('users')->insert([
            'meno' => "Test",
            'priezvisko' => "Testovy",
            'email' => "test@ukf.sk",
            'vek' => 30,
        ]);
    }
}
