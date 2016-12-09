<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            <div class="flash-message">
            <strong>Success : </strong>{{session()->get("success")}}
        <!-- to flush the session after it has been displayed once-->
            {{session()->flush()}}
            </div>
        </div><!-- end of alert-->
    @endif
</div><!-- end of container-->