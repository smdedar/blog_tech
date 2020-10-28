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

        return redirect('admin')->with('message','Success!');
    }

    public function blogView(){
        //$blogs = blogPostData::all();
        $blogs = DB::table('blog_post_data')->simplePaginate(5);
        return view('home',['blogposts'=>$blogs]);
    }

    public function singleblogView($id){
        //return view('blog');
        //$user = UdemyUser::find($id);
        $blog = blogPostData::find($id);
       // return view('blog',['blogpost'=>$blog]);

        $recentposts = blogPostData::all()->sortByDesc("id")->take(3);
        return view('blog',['blogpost'=>$blog, 'recentposts'=>$recentposts]);
    }
}
