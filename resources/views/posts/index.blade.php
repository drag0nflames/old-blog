@extends('layouts.master')

@section('title')
    All Posts
@endsection

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div><!-- end col-md-10-->
        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-primary btn-block btn-h1-spacing"> Create New Post</a>
        </div><!-- end of col-md-2-->
        <div class="col-md-12">
            <hr>
        </div><!-- end of col-md-12-->
    </div><!-- end row-->

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>
                </thead><!-- end of thead-->

                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th>{{$post->id}}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{substr($post->body, 0,50)}}{{strlen($post->body)>50 ? "..." : ""}}</td>
                            <td>{{date('M j,Y', strtotime($post->created_at))}}</td>
                            <td><a href="{{route('posts.show',[$post->id])}}" class="btn btn-default">View</a> <a href="{{route('posts.edit',[$post->id])}}" class="btn btn-default">Edit</a></td>
                        </tr>

                    @endforeach
                </tbody><!-- end of body-->
            </table><!-- end of table-->
            <div class="text-center">
                {{ $posts->links() }}<br>
                {{$posts->currentPage()}} of {{$posts->lastPage()}}
            </div><!-- end of text-center-->
        </div><!-- end of col-md-12-->
    </div><!-- end of row-->
@endsection
