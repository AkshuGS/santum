<?php

namespace App\Http\Controllers;

use App\Models\OnlineAricle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class OnlineAricleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return OnlineAricle::filter($request->all())->get();
    }

    public function storenews()
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
        
        
        return 'OK';
        // $article = OnlineAricle::create($resData['articles']);
}

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {

//         $params = $request->all();
//         dd("OK FINE");;

//         $fields = $request->validate([
//             'title'=> 'required',
//             'description'=> 'required',
//             'url'=> 'required',
//             'source'=> 'required',
//             'urlToImage'=> 'required',
//             'author'=> 'required',
//             'publishedAt'=> 'required',
//             'content'=> 'required'
            
//         ]);
        
//          $fields['source'] = json_encode($request['source']);
         
//          $article = OnlineAricle::create($fields);
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(OnlineAricle $onlineAricle)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, OnlineAricle $onlineAricle)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(OnlineAricle $onlineAricle)
//     {
//         //
//     }
// }
}