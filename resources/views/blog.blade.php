@extends('master')

@section('content')
    <!--first-section-->

    @foreach($blogposts as $blogpost)




<div class="first-section">
    <div class="container mb-5" >
        <div class="row justify-content-center">
            <div class="col-md-9 ">
            <h1 >{{ $blogpost -> blogTitle}}</h1>
                <div class="user d-flex align-items-start justify-content-between bg-light p-4 rounded">
                    <div class="d-flex align-items-start">
                        <img src="http://blog.bootcatch.com/img/user/ajay.jpg" class="img-fluid rounded-circle " alt="Ajay Marathe">
                        <div class="d-block">
                            <span class="d-block">by <a class="h6 text-capitalize text-decoration-none text-primary" >{{ $blogpost -> blogAuthor}}</a></span>
                        <span class="d-block text-muted"> {{ $blogpost -> created_at}}</span>
                        </div>
                    </div>
                <span class="badge badge-light-primary"><i class="fa fa-heart mr-1" aria-hidden="true"></i> {{ $blogpost -> blogCategory}} </span>
                </div>
                <!--//blog section-->
                <div class="blog-section">
                    {{-- {{ $blogpost -> blogBody}} --}}
                    {!! html_entity_decode($blogpost -> blogBody) !!}
                    {{-- {{ addslashes(htmlspecialchars_decode($blogpost -> blogBody)) }} --}}

                    {{-- {{ htmlspecialchars_decode($blogpost -> blogBody) }} --}}
                <hr>
            </div>
        </div>
    </div>

</div>
<!--end first-section-->



@endforeach

<div class="container">
    <h3>Related posts</h3>
    <hr>
    <div clas="row related-post">
        <div class="mb-5 d-md-flex d-lg-flex d-xl-flex justify-content-around">
            <div class="col-md-4 d-inline-block">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="mb-2">
                            <span class="badge badge-light-primary"><i class="fa fa-heart mr-2"
                                    aria-hidden="true"></i>Vue.js</span>
                        </div>
                        <a href="/post/how-to-redirect-to-another-page-in-vuejs" class="card-title ">How to redirect to
                            another pag...</a>

                    </div>
                </div>
            </div>
            <div class="col-md-4 d-inline-block">
                <div class="card border-0 shadow-sm mb-4">

                    <div class="card-body">
                        <div class="mb-2">
                            <span class="badge badge-light-primary"><i class="fa fa-heart mr-2"
                                    aria-hidden="true"></i>Angular</span>
                        </div>
                        <a href="/post/what-are-the-subjects-in-angular-245678" class="card-title ">What are the
                            Subjects in Angul...</a>

                    </div>
                </div>
            </div>
            <div class="col-md-4 d-inline-block">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="mb-2">
                            <span class="badge badge-light-primary"><i class="fa fa-heart mr-2"
                                    aria-hidden="true"></i>Jquery</span>
                        </div>
                        <a href="/post/jquery-remove-elements" class="card-title ">Jquery remove elements.</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
