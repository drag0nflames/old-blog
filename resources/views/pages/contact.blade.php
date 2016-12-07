@extends('layouts.master')

@section('title')
    Contact Page
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 align="center">Contact Us</h1>
            <hr>
            <form action="" method="POST">
                <div class="form-group">
                    <label name="email">Email</label>
                    <input id="email" name="email" class="form-control" placeholder="Enter email">
                </div><!-- ./end form-group-->

                <div class="form-group">
                    <label name="subject">Subject</label>
                    <input id="subject" name="subject" class="form-control" placeholder="Enter subject">
                </div><!-- ./end form-group-->

                <div class="form-group">
                    <label name="message">Message</label>
                    <textarea id="message" name="message" class="form-control" placeholder="Type your message"></textarea>
                </div><!-- ./end form-group-->

                <input type="submit" value="Send Message" class="btn btn-success">
            </form><!-- end form-->
        </div><!-- ./end of col-md-12-->
    </div><!-- ./end of row-->
@endsection