<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Profile extends Model
{
    // 主キーをidカラムとする？
    protected $guarded = array('id');
    // エラーのルール（空欄だった場合はエラー）
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
        );
        
    // ProfileHistoryモデルと関連付ける
    public function profile_histories()
    {
        return $this->hasMany('App\ProfileHistory');
    }
}