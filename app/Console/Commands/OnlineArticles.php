<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\OnlineAricle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class OnlineArticles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:online-articles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Stores the all related date into database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $api_key = env('NewsAPI');
        $response = Http::get('https://newsapi.org/v2/top-headlines?country=us&apiKey='.$api_key);
        $resData = $response->json();

        foreach($resData['articles'] as $res){
        OnlineAricle::updateOrCreate([
        'title' => $res['title'],
        'description'=> $res['description'],
        'url'=> $res['url'],
        'source'=> json_encode($res['source']),
        'urlToImage'=> $res['urlToImage'],
        'author'=> $res['author'],
        'publishedAt'=> Carbon::parse($res['publishedAt'])->format('Y-m-d H:i:s'),
        'content'=> $res['content']  
        ]);
        }
        
        
    }
}
