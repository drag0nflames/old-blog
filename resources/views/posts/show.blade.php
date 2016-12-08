@extends('layouts.master')

@section('title')
    View Post
@endsection

@section('content')
    <div class="container">
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                <strong>Success : </strong>{{session()->get("success")}}
            </div>
        @endif
        <p class="lead"> This is the blog post.</p>
    </div>

@endsection