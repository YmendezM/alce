<?php

use Illuminate\Database\Seeder;
use App\Rol;
class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Rol::class, 10)->create(); 
    }
}
