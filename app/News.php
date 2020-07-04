<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    // titleとbodyが空欄だったらエラーにする
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
        );
}
