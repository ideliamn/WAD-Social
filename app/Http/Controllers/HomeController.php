<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\model1 as Posts;
use App\komentarmodel as komentarmodel;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        /*
        $post = DB::table('posts')
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->select('posts.*', 'users.*')->get();
        return view('home', [
            'ngulang'=>$post
        ]);
        */
        

        $post = Posts::with('users')
        ->with('komentar_post')
        ->orderBy('id', 'DESC')
        ->get();
        

        return view('home', ['ngulang'=>$post]);

    }
}
