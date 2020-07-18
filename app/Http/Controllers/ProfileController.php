<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        //プロフィール情報を取得する
        $posts = Profile::all()->sortByDesc('update_at');
        
        if (count($posts) > 0) {
            // 最新のプロフィールを$new_profileに代入する
            $new_profile = $posts->shift();
        } else {
            $new_profile = null;
        }
        
        return view('profile.index', ['new_profile'=> $new_profile, 'posts' => $posts]);
    }

}