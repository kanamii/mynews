@extends('layouts.front')

@section('title','プロフィール')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Profile</h2>
                <hr color="#c0c0c0">
                <div class="form-group row">
                    <div class="col-md-2">氏名</div>
                        <div class="col-md-10">
                            <p>{{ $new_profile->name }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">性別</div>
                        <div class="col-md-10">
                            <p>{{ $new_profile->gender }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">趣味</div>
                        <div class="col-md-10">
                            <p>{{ $new_profile->hobby }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">自己紹介欄</div>
                        <div class="col-md-10">
                            <div>{{ $new_profile->introduction }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection