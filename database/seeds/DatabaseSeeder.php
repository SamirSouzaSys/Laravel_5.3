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
         $this->call(UserTableSeeder::class);
//        App\User::create([
//          'name'     => 'Carlos Ferreira',
//          'email'    => 'carlos@email.com',
//          'password' => bcrypt('123456')
//        ]);
    }
}
