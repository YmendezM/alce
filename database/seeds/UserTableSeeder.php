<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(User::class)->create([
        'name'     => 'ysrael Mendez',
        'email'    => 'ysmendezm@gmail.com',
        'password' => bcrypt('123456')
    ]);
        factory(User::class, 10)->create(); 	
    }
}
