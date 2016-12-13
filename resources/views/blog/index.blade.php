@extends('layouts.master')

@section('title')
    Blog Posts
@endsection

@section('content')
<div class="container-fluid">
    <div class="row col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Blog</h1>
            </div><!-- end of panel-heading-->
            <div class="panel-body">
                @foreach($posts as $post)
                    <div class="list-group">
                        <div class="list-group-item">
                            <h2>{{$post->title}}</h2>
                            <h5>Published: {{date('M j, Y', strtotime($post->created_at))}}</h5>
                            <p>{{substr($post->body,0, 250)}}{{strlen($post->body) > 250 ? "..." : ""}}</p>
                            <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                        </div><!-- end of list group item-->
                    </div><!-- end of list group-->
                @endforeach

                    <div class="text-center">
                        {{ $posts->links() }}<br>
                    </div><!-- end of text-center-->
            </div><!-- end of panel-body-->
        </div><!-- end of panel-->
    </div><!-- end of row-->
</div><!-- end of container-fluid-->
@endsection