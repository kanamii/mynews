<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\ProfileHistory;
use Carbon\carbon;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create(Request $request)
    {
        // $rulesに基づいてvalidationする
        $this->validate($request, Profile::$rules);
        
        $profiles = new Profile;
        $form = $request->all();
        
        unset($form['_token']);
        
        // データベースに保存する
        $profiles->fill($form);
        $profiles->save();
        
        // プロフィール作成画面に戻る
        return redirect('admin/profile/create');
    }
    
    public function edit(Request $request)
    {
        // Profileモデルからデータを取得する
        $profiles = Profile::find($request->id);
        if (empty($profiles)) {
          about(404);
        }
        return view('admin.profile.edit', ['profile_form' => $profiles]);
    }
    
    public function update(Request $request)
    {
        // validateする
        $this->validate($request, Profile::$rules);
        
        // データを取得する
        $profiles = Profile::find($request->id);
        
        // フォームデータを格納する
        $profile_form = $request->all();
        
        unset($profile_form['_token']);
        
        // 該当するデータを上書きして保存する
        $profiles->fill($profile_form)->save();
        
        // 更新履歴　この$historyはprofile_formにと関連付けされる？
        $history = new ProfileHistory;
        $history->profile_id = $profiles->id;
        $history->edited_at = Carbon::now();
        $history->save();
      
        return redirect('/profile');
    }
}
