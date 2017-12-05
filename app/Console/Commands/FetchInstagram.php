<?php

namespace App\Console\Commands;

use App\Models\Raw;
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

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $medias = json_decode(file_get_contents('https://api.instagram.com/v1/users/self/media/recent/?access_token=' . env('INSTAGRAM_TOKEN')));

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
}
