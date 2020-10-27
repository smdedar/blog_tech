@extends('master')

@section('title', 'TechFolk Blog')

@section('content')

<!--first-section-->
<div class="first-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 ">
                <div class="mb-4">
                    <h4> Hello React World.</h4>
                    <div class="user d-flex align-items-start justify-content-between bg-light p-3 rounded">
                        <div class="d-flex align-items-start">
                            <img src="http://blog.bootcatch.com/img/user/ajay.jpg" class="img-fluid rounded-circle"
                                alt="Ajay Marathe">
                            <div class="d-block">
                                <span class="d-block">by <a
                                        class="h6 text-capitalize text-decoration-none text-primary"> Ajay
                                        Marathe</a></span>
                                <span class="d-block text-muted">6 months ago</span>
                            </div>
                        </div>
                        <span class="badge badge-light-primary"><i class="fa fa-heart mr-1" aria-hidden="true"></i>
                            React </span>
                    </div>
                    <!--//blog section-->
                    <div class="blog-section">
                        <p>How to print Hello world in React, below is some code snippets which will print hello world
                            in react.</p>
                        <a href="post/hello-react-world" class="btn btn-primary">Read more</a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
<!--end first-section-->

@endsection
