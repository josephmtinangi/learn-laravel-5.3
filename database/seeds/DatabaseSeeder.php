<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $authors = factory(App\Author::class, 1000)->create();
        // $this->call(BooksTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
        $this->call(BookCategoryTableSeeder::class);
    }
}
