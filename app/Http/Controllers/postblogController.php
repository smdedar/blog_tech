<?php

namespace App\Http\Controllers;
use App\blogPostData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postblogController extends Controller
{
    //
    public function post(Request $request){
        $blog = $request->all();
        $test = $blog['blogTitle'];
        //dd($test);

        //DB::insert('insert into blog_post_data (blogTitle, blogBody, blogCategory, blogAuthor) values (?, ?, ?, ?)', [$blog['blogTitle'], $blog['blogBody'], 'Tech', 'Dayle']);

        blogPostData::create([
            'blogTitle' => $blog['blogTitle'],
            'blogBody' => $blog['blogBody'],
            'blogCategory' => 'Tech',
            'blogAuthor' => 'Dedar'
        ]);
        dd("Blog Posted");
    }

    public function blogView(){
        $blogs = blogPostData::all();
        return view('blog',['blogposts'=>$blogs]);
    }

    public function singleblogView(){
        //return view('blog');
    }
}
