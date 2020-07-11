<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = array('id');
    
    // titleとbodyが空欄だったらエラーにする
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
        );
}
