@extends('layouts.master')

@section('title')
    Blog Posts
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Blog</h1>
        </div><!-- end of col-md-12-->
    </div><!-- end of row-->

    @foreach($posts as $post)
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>{{$post->title}}</h2>
                <h5>Published: {{date('M j, Y', strtotime($post->created_at))}}</h5>
                <p>{{substr($post->body,0, 250)}}{{strlen($post->body) > 250 ? "..." : ""}}</p>
                <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                <hr>
            </div><!-- end of col-md-8-->
        </div><!-- end of row-->
    @endforeach

    <div class="text-center">
        {{ $posts->links() }}<br>
    </div><!-- end of text-center-->
@endsection