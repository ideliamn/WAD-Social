<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User as User;
use App\model1 as Post;
use Auth;
use Storage;

class ProfileController extends Controller
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
        return view('profile', ['ngulang'=>$post]);
        */
        // DB::table('users')->where('id', '=', $id)->get();
        $id = Auth::user()->id;
        $data = User::with('posts')->find($id);
        return view('profile', ['data' => $data]);


        //$posts = post::where('user_id','=',$user->id)->get();
        //return view('profile',['user'=>$user]);
        //return view('profile', compact('user', 'post'));
    }
}
