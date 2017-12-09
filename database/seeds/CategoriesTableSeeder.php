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
            [
                "id" => 1,
                "slug" => "fashion",
                "title" => "Busana",
                "description" => "Fashion, Baju Belanja",
            ], [
                "id" => 2,
                "slug" => "elektronik",
                "title" => "Elektronik",
                "description" => "Elektronik",
            ],
            [
                "id" => 3,
                "slug" => "makanan-dan-minuman",
                "title" => "Makanan dan Minuman",
                "description" => 'Makanan dan Minuman',
            ],
            [
                "id" => 4,
                "slug" => "rumah-tangga",
                "title" => "Rumah Tangga",
                "description" => "rumah tangga",
            ],
            [
                "id" => 5,
                "slug" => "kesehatan-dan-kecantikan",
                "title" => "Kesehatan dan Kecantikan",
                "description" => "Kesehatan dan Kecantikan",
            ],
            [
                "id" => 6,
                "slug" => "travel",
                "title" => "Travel",
                "description" => "travel",
            ],
            [
                "id" => 7,
                "slug" => "olah-raga",
                "title" => "olah raga",
                "description" => "olah raga",
            ],
            [
                "id" => 8,
                "slug" => "online",
                "title" => "Online",
                "description" => "online stuff",
            ]];

        foreach ($categories as $c) {
            Category::create([
                'id' => $c['id'],
                'slug' => $c['slug'],
                'title' => $c['title'],
                'description' => $c['description'],
            ]);
        }

    }
}
