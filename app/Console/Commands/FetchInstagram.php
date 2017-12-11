<?php

namespace App\Console\Commands;

use App\Models\Raw;
use App\Models\Source;
use Goutte\Client;
use Illuminate\Console\Command;

class FetchInstagram extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:instagram';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch From Instagram';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {

        $medias = json_decode(file_get_contents('https://api.instagram.com/v1/users/self/media/liked?access_token=' . env('INSTAGRAM_TOKEN')));
        return $medias;

        $this->scrapper2();

        $src = Source::all();
        foreach ($src as $r) {
            $this->scrapper($r);
        }
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function getPost()
    {
        $medias = json_decode(file_get_contents('https://api.instagram.com/v1/users/self/media/recent/?access_token=' . env('INSTAGRAM_TOKEN')));
        https: //api.instagram.com/v1/users/self/media/liked?access_token=ACCESS-TOKEN

        // dd($medias->data);
        foreach ($medias->data as $r) {
            $raw = Raw::firstOrCreate(['unique_id' => $r->id], [
                'image' => $r->images->standard_resolution->url,
                'content' => object_get($r, 'caption.text', '-'),
                'author' => $r->user->username,
                'source' => $r->link,
            ]);
            print_R($raw->toArray());
        }
        $this->info("ftch Instagram!");
    }

    public function listFollower()
    {
        $followings = json_decode(file_get_contents('https://api.instagram.com/v1/users/self/follows?access_token=' . env('INSTAGRAM_TOKEN')));
        print_r($followings);
    }

    public function scrapper($r)
    {

        $client = new Client();
        $crawler = $client->request('GET', $r->url);
        $scripts = $crawler->filter('script');
        $htmls = [];
        foreach ($scripts as $s) {
            $htmls[] = $s->ownerDocument->saveHTML($s);
        }

        $text = $htmls[2];
        $text = str_replace('<script type="text/javascript">window._sharedData = ', '', $text);
        $text = str_replace(';</script>', '', $text);
        $json = json_decode($text);

        $obj = object_get($json, 'entry_data.ProfilePage', false);
        $data = [];
        if ($obj) {
            $nodes = $obj[0]->user->media->nodes;

            foreach ($nodes as $node) {
                $ig = [];
                if (!$node->is_video) {
                    $ig['id'] = $node->id;
                    $ig['tipe'] = 'ig';
                    $ig['image'] = $node->thumbnail_src;
                    $ig['content'] = object_get($node, 'caption', '');
                    $ig['source'] = $r->url;
                    $ig['author'] = $r->title;
                    $ig['created_at'] = date('Y-m-d H:i:s', $node->date);
                    $ig['updated_at'] = date('Y-m-d H:i:s', $node->date);
                    $raw = Raw::firstOrCreate(['unique_id' => $node->id], $ig);
                }
            }

        }
    }

    public function scrapper2()
    {

        $client = new Client();
        $crawler = $client->request('GET', 'https://www.instagram.com/barutauuu/saved/');
        $scripts = $crawler->filter('script');
        $htmls = [];
        foreach ($scripts as $s) {
            $htmls[] = $s->ownerDocument->saveHTML($s);
        }

        $text = $htmls[4];
        $text = str_replace('<script type="text/javascript">window._sharedData = ', '', $text);
        $text = str_replace(';</script>', '', $text);

        $json = json_decode($text);
        dd($json->entry_data);
        $obj = object_get($json, 'entry_data.ProfilePage', false);
        dd($obj);
        $data = [];
        if ($obj) {
            $nodes = $obj[0]->user->media->nodes;

            foreach ($nodes as $node) {
                $ig = [];
                if (!$node->is_video) {
                    $ig['id'] = $node->id;
                    $ig['tipe'] = 'ig';
                    $ig['image'] = $node->thumbnail_src;
                    $ig['content'] = object_get($node, 'caption', '');
                    // $ig['source'] = $r->url;
                    // $ig['author'] = $r->title;
                    $ig['created_at'] = date('Y-m-d H:i:s', $node->date);
                    $ig['updated_at'] = date('Y-m-d H:i:s', $node->date);
                    $data[] = $ig;
                    // $raw = Raw::firstOrCreate(['unique_id' => $node->id], $ig);
                }
            }

        }

        dd($data);
    }
}
