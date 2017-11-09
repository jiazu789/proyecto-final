<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {




    	
        factory(App\User::class)->create([
        	'name' => 'jiazu',
        	'email'=>'jiazu@hola.com',
        	'role' => 'admin',
        	'password'=> bcrypt('jiazu789')
        	]);
        factory(App\User::class,5)->create();

    }
}
