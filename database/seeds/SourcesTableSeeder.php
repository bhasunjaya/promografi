<?php

use App\Models\Source;
use Illuminate\Database\Seeder;

class SourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sources')->truncate();
        $c = [
            ['supermalkarawaci', 'Supermal Karawaci'],
            ['yourlippomallpuri', 'Lippo Mall Puri'],
            ['emporiumpluitmall', 'Emporium Pluit Mall'],
            ['aeonmallbsdcity', 'AEON MALL BSD CITY'],
            ['pluit_village', 'Pluit Village'],
            ['baywalkmall_jkt', 'Baywalk Mall - Pluit'],
            ['maltamananggrek', 'Mal Taman Anggrek'],
            ['malarthagading', 'Mal Artha Gading'],
            ['mallofindonesia', 'MOI'],
            ['marketincjkt', 'marketinc.us'],
            ['kuningan_city', 'Mall Kuningan City'],
            ['pikavenue', 'PIK Avenue'],
            ['lippomallkemang', 'Lippo Mall Kemang'],
            ['centralparkmall', 'Central Park Mall'],
            ['gandariacity', 'Gandaria City'],
            ['kotakasablanka', 'Kota Kasablanka'],
            ['mkglapiazza', 'Mal Kelapa Gading'],
            ['lotte_avenue', 'LOTTE Shopping Avenue'],
            ['metrodept', 'METRO Department Store'],
            ['grandindo', 'Grand Indonesia'],
            ['senayancity', 'SenayanCity'],
            ['plaza_indonesia', 'Plaza Indonesia'],
            ['pacificplacejkt', 'Pacific Place Jakarta'],
            ['sogo_ind', 'SOGO Dept Store Indonesia'],
            ['plaza_senayan', 'Plaza Senayan'],
        ];

        foreach ($c as $r) {
            Source::create([
                'source_type' => 'ig',
                'title' => $r[1],
                'url' => 'https://www.instagram.com/' . $r[0],
                'author' => $r[0],
            ]);
        }
        // DB::table('sources')->insert($data);
    }
}
