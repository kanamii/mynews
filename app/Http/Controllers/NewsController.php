<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

use App\News;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        // newsテーブルの情報を投稿日順に取得する
        $posts = News::all()->sortByDesc('update_at');
        
        if (count($posts) > 0) {
            // 最初の記事を$headlineに代入する
            $headline = $posts->shift();
        } else {
            $headline = null;
        }
        
        return view('news.index', ['headline' => $headline, 'posts' => $posts]);
    }
}