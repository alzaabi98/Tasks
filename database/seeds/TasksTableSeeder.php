<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
 
class TasksTableSeeder extends Seeder
{
    
    public function run()
    {
    	$faker = Faker::create();
    	foreach (range(1,30) as $index) {
	        Task::create([
	            'tilte' => $faker->sentence(5),
	            'detail' => $faker->paragraph(4),
	            
	        ]);
        }
    }
}