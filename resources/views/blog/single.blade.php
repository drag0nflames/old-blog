@extends('layouts.master')

@section('title')
    {{$post->title}}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 align="center">{{$post->title}}</h1>
            <hr>
            <p>{{$post->body}}</p>
        </div><!-- col-md-8-->
    </div><!-- end of row-->
@endsection