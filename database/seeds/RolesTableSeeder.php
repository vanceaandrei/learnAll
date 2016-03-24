<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\models\Role::create([
        	'name' => 'prof', 
        	'display_name' => 'professor', 
        	'description' => 'Has access to his account and account settings',
        ]);

        App\models\Role::create([
        	'name' => 'stud', 
        	'display_name' => 'student', 
        	'description' => 'Has access to his account and account settings',
        ]);

    }
}
