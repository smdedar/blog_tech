@extends('master')

@section('content')
    <div class="row">
        <div class="col">

        </div>
        <div class="col">
        <form method="POST" action="{{url('/postblog')}}">
            @csrf
                <div class="form-group">
                    <label for="blogTitle">Blog Title</label>
                    <input type="text" class="form-control" name="blogTitle" aria-describedby="emailHelp" placeholder="Blog Title">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Blog Body</label>
                    <textarea name="blogBody" id="editor" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col">

        </div>
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>

@endsection
