@extends('layouts.master')

@section('title')
    Blog | Homepage
@endsection

@section('content')
    <div class="container">
        <div class="carousel slide" id="myCarousel">
            <!-- Indicators-->
            <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#myCarousel"></li>
                <li data-slide-to="1" data-target="#myCarousel"></li>
                <li data-slide-to="2" data-target="#myCarousel"></li>
            </ol>
            <!-- wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active" id="slide1">
                    <div class="carousel-caption">
                        <h4>Bootstrap</h4>
                        <p>Learn how to build your first responsive website with twitter bootstrap 3.</p>
                    </div><!-- end carousel option-->
                </div><!-- end item-->

                <div class="item" id="slide2">
                    <div class="carousel-caption">
                        <h4>Learn to code</h4>
                        <p>PSD to HTML5 &amp; CSS is a popular styling language.</p>
                    </div><!-- end carousel option-->
                </div><!-- end item-->

                <div class="item" id="slide3">
                    <div class="carousel-caption">
                        <h4>Webhosting 101</h4>
                        <p>Learn how to buy perfect domain name and hosting.</p>
                    </div><!-- end carousel caption-->
                </div><!-- end item-->
            </div><!-- end carousel inner-->

            <!-- Controls -->
            <a class="left carousel-control" data-slide="prev" href="#myCarousel"><span class="icon-prev"></span></a>
            <a class="right carousel-control" data-slide="next" href="#myCarousel"><span class="icon-next"></span></a>
        </div><!-- end myCarousel-->
    </div><!-- end container-->


    <div class="container">
        <div class="row" id="bigcallout">
            <div class="col-md-12">
                <div class="well">
                    <div class="page-header">
                        <h1>Welcome to my blog
                            <small>A cool place to hangout</small>
                        </h1>
                    </div><!-- ./end page header-->
                    <p class="lead">Some solid copy will help get you some users engaged. Use this area to come up with
                        something real nice.
                        You know what i'm saying?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, optio sunt! Esse exercitationem
                        ipsum quisquam sequi tempore! Ab adipisci ex incidunt ipsam, labore libero necessitatibus nemo
                        quaerat rem vel voluptate?</p>
                    <a href="" class="btn btn-lg btn-primary">Popular Post</a>
                    <a href="" class="btn btn-lg btn-link">or a secondary button</a>
                </div><!--./end well-->
            </div><!-- ./end col-12-->
        </div><!-- ./end bigcallout-->

        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h1>Post Title</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, blanditiis doloribus harum
                        itaque quis sunt temporibus. At consequuntur debitis doloremque, doloribus enim eveniet iure nam
                        quod ratione tempora unde voluptate.</p>
                    <a href="" class="btn btn-primary">Read more</a>
                </div><!-- end of post-->
                <hr>
                <div class="post">
                    <h1>Post Title</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, blanditiis doloribus harum
                        itaque quis sunt temporibus. At consequuntur debitis doloremque, doloribus enim eveniet iure nam
                        quod ratione tempora unde voluptate.</p>
                    <a href="" class="btn btn-primary">Read more</a>
                </div><!-- end of post-->
                <hr>
                <div class="post">
                    <h1>Post Title</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, blanditiis doloribus harum
                        itaque quis sunt temporibus. At consequuntur debitis doloremque, doloribus enim eveniet iure nam
                        quod ratione tempora unde voluptate.</p>
                    <a href="" class="btn btn-primary">Read more</a>
                </div><!-- end of post-->
                <hr>
                <div class="post">
                    <h1>Post Title</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, blanditiis doloribus harum
                        itaque quis sunt temporibus. At consequuntur debitis doloremque, doloribus enim eveniet iure nam
                        quod ratione tempora unde voluptate.</p>
                    <a href="" class="btn btn-primary">Read more</a>
                </div><!-- end of post-->
            </div><!-- end of col-md-8-->

            <div class="col-md-3 col-md-offset-1">
                <h1>Side Bar</h1>
            </div><!-- end of col-md-3-->
        </div><!-- end of row-->
    </div><!-- end of container -->

@endsection