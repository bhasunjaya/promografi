<?php

use App\Models\Category;
use Faker\Factory as Faker;
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
        $faker = Faker::create();

        $categories = [
            'makanan dan minuman',
            'rumah tangga',
            'elektronik',
            'lifestyle',
            'lain-lain',
        ];

        foreach ($categories as $c) {
            Category::create([
                'title' => $c,
                'description' => $faker->sentence,
            ]);
        }

    }
}
