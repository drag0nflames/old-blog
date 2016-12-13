@extends('layouts.master')

@section('title')
    Reset Password
@endsection

@section('content')
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">&nbsp;</div><!-- end of panel-heading-->
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Reset Password</div><!-- end of panel heading-->
                            <div class="panel-body">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div><!-- end of alert-->
                                @endif

                                <form class="form-horizontal" role="form" method="post" action="{{url('password/reset')}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="token" value="{{$token}}">

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">E-mail Address</label>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control" name="email" value="{{$email}}" >
                                        </div><!-- end of col-md-6-->
                                    </div><!-- end of form-group-->

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">New Password</label>
                                        <div class="col-md-6">
                                            <input type="password" class="form-control" name="password" >
                                        </div><!-- end of col-md-6-->
                                    </div><!-- end of form group-->

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Confirm Password</label>
                                        <div class="col-md-6">
                                            <input type="password" class="form-control" name="password_confirmation" >
                                        </div><!-- end of col-md-6-->
                                    </div><!-- end of form group-->

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-btn fa-refresh"></i> Reset Password
                                            </button>
                                        </div><!-- end of col-md-6-->
                                    </div><!-- end of form-group-->
                                </form><!-- end of form-->
                            </div><!-- end of panel-body-->
                        </div><!-- end of panel-->
                    </div><!-- end of col-md-8-->
                </div><!-- end of row-->
            </div><!-- end of panel-body-->
        </div><!-- end of panel-->
    </div><!-- end of container-->
@endsection

