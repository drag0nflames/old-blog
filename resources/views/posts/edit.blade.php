@extends('layouts.master')

@section('title')
    Edit Blog Post
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <h1 align="center">Edit post</h1>
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
            <form method="post" action="{{ route('posts.update',[$post->id]) }}">
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input id="title" name="title" type="text" class="form-control" value="{{$post->title}}">
                </div><!-- end form-group-->
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input id="slug" name="slug" type="text" class="form-control" value="{{$post->slug}}">
                </div><!-- end form-group-->
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea rows="6" id="body" name="body" class="form-control" >{{$post->body}}</textarea>
                </div><!-- end form-group-->
                <input class="btn btn-success center-block" type="submit" value="Save changes">
                {{ csrf_field() }}
            </form>
        </div><!-- end of col-md-6-->
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal dl-def">
                    <dt>Created at</dt>
                    <dd>{{date('M j, Y h:ia',strtotime($post->created_at))}}</dd>
                </dl><!-- end of dl -->
                <dl class="dl-horizontal">
                    <dt>Last Updated</dt>
                    <dd>{{ date('M j, Y h:ia',strtotime($post->updated_at ))}}</dd>
                </dl><!-- end of dl -->
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <a href="{{route('posts.show',[$post->id])}}" class="btn btn-danger center-block">Cancel</a>
                    </div><!-- end of col-sm-6-->

                </div>
            </div><!-- end of well-->
        </div><!-- end of col-md-4-->
    </div><!-- end of row-->
@endsection