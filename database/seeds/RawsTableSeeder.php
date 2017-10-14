<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class RawsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
