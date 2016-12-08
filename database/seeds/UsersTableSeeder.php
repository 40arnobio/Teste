<?php

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
        factory(\Loja\User::class,1)->create([
           'email' => 'arnobio4@gmail.com'
        ]);
    }
}
