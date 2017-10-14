<?php

use App\Models\Category;
use App\Models\Mall;
use Faker\Factory as Faker;
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
        Eloquent::unguard();

        //disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('malls')->truncate();
        DB::table('mall_post')->truncate();
        DB::table('posts')->truncate();
        DB::table('raws')->truncate();

        $this->malls();
        $this->categories();
        $this->raws();

    }

    public function malls()
    {
        $faker = Faker::create();
        foreach (range(0, 5) as $c) {
            $mall = new Mall;
            $mall->title = 'Mall of ' . $faker->word;
            $mall->description = $faker->paragraph;
            $mall->image = asset('images/mall-dummy.jpg');
            $mall->save();
        }
    }

    public function categories()
    {
        $faker = Faker::create();

        //categories
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

    public function raws()
    {
        $faker = Faker::create();
        $i = 1;
        $array = [];
        foreach (range(0, 20) as $c) {
            $array[] = [
                'tipe' => 'ig',
                'image' => asset('images/dummy.jpg'),
                'author' => $faker->username,
                'content' => $faker->paragraph,
                'source' => 'https://ig.com',
                'unique_id' => $i++,
            ];
        }
        DB::table('raws')->insert($array);
    }
}
