<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([

        	'name' 			=> 'Super Admin',
        	'slug' 			=> 'admin',
        	'created_at' 	=> now(),
        	'updated_at' 	=> now(),
        ]);

        Role::create([

        	'name' 			=> 'Manager',
        	'slug' 			=> 'manager',
        	'created_at' 	=> now(),
        	'updated_at' 	=> now(),
        ]);

        Role::create([

        	'name' 			=> 'Writer',
        	'slug' 			=> 'writer',
        	'created_at' 	=> now(),
        	'updated_at' 	=> now(),
        ]);

        Role::create([

        	'name' 			=> 'User',
        	'slug' 			=> 'user',
        	'created_at' 	=> now(),
        	'updated_at' 	=> now(),
        ]);
    }
}
