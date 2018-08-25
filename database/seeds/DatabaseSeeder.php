<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
    	//la creacion de datos de toles debe de ejecutarse primero
    	$this->call(RoleTableSeeder::class);

    	//los usuarios necesitaran los roles previamente cargados
    	$this->call(UserTableSeeder::class);

    }
}
