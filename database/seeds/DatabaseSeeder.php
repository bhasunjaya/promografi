<?php

use App\Models\Category;
use App\Models\Mall;
use App\Models\Post;
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
        $this->posts();

    }

    public function malls()
    {
        $faker = Faker::create();
        foreach (range(0, 15) as $c) {
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

    public function posts()
    {
        $faker = Faker::create();
        $malls = Mall::pluck('id')->toArray();

        foreach (range(0, 29) as $i) {
            $post = new Post;
            $ts = $faker->dateTimeThisMonth()->format('Y-m-d H:i:s');
            $ts = $faker->dateTimeBetween('-2 weeks', 'now')->format('Y-m-d H:i:s');

            $now = $faker->dateTimeThisMonth();
            $until = $faker->dateTimeBetween('now', '+ 30 days');

            $prices = ['diskon:20%', 'buy one:get one', 'promo', 'midnite:sale'];

            $post->category_id = rand(1, 4);
            $post->title = $faker->sentence;
            $post->excerpt = $faker->paragraph;
            $post->content = $faker->paragraphs(3, true);
            $post->price = $faker->randomElement($prices);
            $post->image = asset('images/dummy.jpg');
            $post->start_at = $now->format('Y-m-d');
            $post->end_at = $until->format('Y-m-d');
            $post->is_featured = $faker->boolean(30);
            $post->is_online = $faker->boolean(30);
            $post->is_publish = true;
            $post->created_at = $ts;
            $post->updated_at = $ts;
            $post->save();

            if ($faker->boolean(30)) {
                $omalls = $faker->randomElements($malls, rand(1, 5));
                $post->malls()->sync($omalls);

            }

        }
    }
}
