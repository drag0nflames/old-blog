@extends('layouts.master')

@section('title')
    View Post
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>{{ $post->title }}</h1>
                <p class="lead">{{ $post->body }}</p>
            </div><!-- end of col-md-8-->
            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal dl-def">
                        <label>URL Slug:</label>
                        <p><a href="{{url('blog/'.$post->slug)}}">{{url($post->slug)}}</a></p>
                    </dl><!-- end of dl -->

                    <dl class="dl-horizontal">
                        <label>Created at</label>
                        <p>{{date('M j, Y h:ia',strtotime($post->created_at))}}</p>
                    </dl><!-- end of dl -->

                    <dl class="dl-horizontal">
                        <label>Last Updated</label>
                        <p>{{ date('M j, Y h:ia',strtotime($post->updated_at ))}}</p>
                    </dl><!-- end of dl -->

                    <hr>

                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{route('posts.edit',[$post->id])}}" class="btn btn-primary btn-block">Edit</a>
                        </div><!-- end of col-sm-6-->
                        <div class="col-sm-6">
                            <!--<a href="{{route('posts.destroy',[$post->id])}}" class="btn btn-danger btn-block">Delete</a>-->
                            <form action="{{route('posts.destroy',[$post->id])}}" method="post">
                                {{ method_field('DELETE') }}
                                <input class="btn btn-danger btn-block" type="submit" value="Delete">
                                {{csrf_field()}}
                            </form><!-- end of form-->
                        </div><!-- end of cols-sm-6-->
                    </div>
                </div><!-- end of well-->
            </div><!-- end of col-md-4-->
        </div><!-- end of row-->
    </div><!-- end container -->


@endsection