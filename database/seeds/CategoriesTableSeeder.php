<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $faker->addProvider(new \Faker\Provider\Lorem($faker));

        for($i = 0; $i < 10; $i++){
        	$category = App\Category::create([
        			'name' => $faker->word(),
        			'display_name' => str_slug($faker->word(), '-'),
        			'description' => $faker->paragraph(2, true)
        		]);
        }
    }
}
