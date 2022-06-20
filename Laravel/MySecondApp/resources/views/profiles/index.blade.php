@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/svg/mine.jpg" alt="mine" class="rounded-circle">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pe-sm-5"><strong>153</strong> posts</div>
                <div class="pe-sm-5"><strong>23k</strong> followers</div>
                <div class="pe-sm-5"><strong>212</strong> following</div>
            </div>
            <div class='pt-4'><strong>{{$user->profile->title}}</strong></div>
            <div>{{$user->profile->description ?? 'empty description'}}</div>
            <div><strong><a href="https://www.instagram.com/udara_aby/">{{$user->profile->url}}</a></strong></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="/svg/n1.jpg" class="w-100"></a>
        </div>
        <div class="col-4">
            <img src="/svg/n2.jpg" class="w-100"></a>
        </div>
        <div class="col-4">
            <img src="/svg/n3.jpg" class="w-100"></a>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="/svg/n4.jpg" class="w-100"></a>
        </div>
        <div class="col-4">
            <img src="/svg/n5.jpg" class="w-100"></a>
        </div>
        <div class="col-4">
            <img src="/svg/n6.jpg" class="w-100"></a>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="/svg/n7.jpg" class="w-100"></a>
        </div>
        <div class="col-4">
            <img src="/svg/n8.jpg" class="w-100"></a>
        </div>
        <div class="col-4">
            <img src="/svg/n9.jpg" class="w-100"></a>
        </div>
    </div>
</div>
@endsection