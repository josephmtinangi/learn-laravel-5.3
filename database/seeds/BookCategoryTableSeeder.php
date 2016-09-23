<?php

use Illuminate\Database\Seeder;

class BookCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $faker->addProvider(new \Faker\Provider\Base($faker));

        for($i = 0; $i < 50; $i++){
            $book_category = App\BookCategory::create([
                'book_id' => $faker->numberBetween($min = 1, $max = 25),
                'category_id' => $faker->numberBetween($min = 1, $max = 25)
                ]);
        }
    }
}
