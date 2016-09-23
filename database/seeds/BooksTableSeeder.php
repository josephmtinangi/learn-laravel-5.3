<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
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

        for($i = 0; $i < 50; $i++){
        	$book = App\Book::create([
        			'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        			'display_title' => str_slug($faker->sentence($nbWords = 6, $variableNbWords = true), '-'),
        			'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        			'published' => $faker->dateTimeThisDecade($max = 'now')
        		]);
        }
    }
}
