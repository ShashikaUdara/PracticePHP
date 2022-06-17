@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{URL::to('/images/j.jpg')}}" alt="myj" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>Udara Abeyrathne</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>154</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
        </div>
    </div>
</div>
@endsection
