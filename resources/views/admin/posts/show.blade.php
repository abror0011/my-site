@extends('layouts.admin')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Batafsil
        </h6>
    </div>
    <div class="card-body text-gray-900">   
        <h2 class="">{{$date->title}}</h2>
        <p><i class="fa fa-eye"></i> {{$date->views}}</p>
        <p></p>
        <p>{{$date->content}}</p>
    </div>
</div>
@endsection