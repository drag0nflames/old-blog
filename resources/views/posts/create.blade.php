@extends('layouts.master')

@section('title')
    Create New Post
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/css/parsley.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1 align="center">Create New Post</h1>
                <hr>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ route('posts.store') }}">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input id="title" name="title" type="text" class="form-control" placeholder="Enter Title">
                    </div><!-- end form-group-->
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea rows="6" id="body" name="body" class="form-control" placeholder="Enter Body Of Blog"></textarea>
                    </div><!-- end form-group-->
                    <input type="submit" value="Create Post" class="btn btn-success">
                    {{ csrf_field() }}
                </form>
            </div><!-- end col-md-8-->
        </div><!-- end row-->
    </div><!-- end container-->
@endsection

@section('scripts')
    <script src="/src/js/parsley.js"></script>
@endsection