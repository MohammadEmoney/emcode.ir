<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class BlogController extends Controller
{
    public function index()
    {
        $storage = Redis::connection();
        $popular = $storage->zRange('articleViews', 0, -1);

        return response()->json($popular);
    }

    public function show($id)
    {
        $storage = Redis::connection();
        if($storage->zScore('articleViews', 'article:' . $id)){
            $storage->pipeLine(function($pipe) use ($id){
                $pipe->zIncrBy('articleViews', 1 ,'article:' . $id);
                $pipe->incr('article:'. $id . ':views');
            });
            $storage->zIncrBy('articleViews', 1 ,'article:' . $id);
        }else{
            $views = $storage->incr('article:'. $id . ':views');
            $storage->zIncrBy('articleViews', $views ,'article:' . $id);
        }
        $views = $storage->get('article:'. $id . ':views');
        return "This is the article with Id: $id and it has $views views";
    }
}
