<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;

class PagesController extends Controller
{
    
    public function index(){
        $title = 'Welcome To Your Profile';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function test(){
        return view('test');
    }
    public function about(){
        
        $posts = Post::orderBy('created_at','desc')->paginate(10);
        return view('pages.about')->with('posts', $posts);
       // $title = 'About Us';
        //return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Here', 'you can', 'post about your services']
        );
        return view('pages.services')->with($data);
    }
}
