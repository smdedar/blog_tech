@extends('master')

@section('content')
    <!--first-section-->






<div class="first-section">
    <div class="container mb-5" >
        <div class="row justify-content-center">
            <div class="col-md-9 ">
            <h4> {{ $blogpost -> blogTitle}} </h4>
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





<div class="container">
    <h3>Related posts</h3>
    <hr>
    <div clas="row related-post">
        <div class="mb-5 d-md-flex d-lg-flex d-xl-flex justify-content-around">

            @foreach ($recentposts as $recentpost)
            <div class="col-md-4 d-inline-block">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="mb-2">
                            <span class="badge badge-light-primary"><i class="fa fa-heart mr-2" aria-hidden="true"></i> {{ $recentpost -> blogCategory}} </span>
                        </div>
                        <a href="{{url('blog/'.$recentpost->id )}}" class="card-title ">{{ $recentpost -> blogTitle}} </a>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
