<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\model1 as Posts;
use Auth;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class AddPostController extends Controller
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

    public function index(){
      return view('addpost');
    }

    public function addnewpost(Request $request){

        $fotonya = $request->file('foto')->store('posts', 'public');
        Posts::insert([
          'user_id' => Auth::user()->id,
          'caption' => $request->postcaption,
          'image' => $fotonya,
          'likes' => 0,
          'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
        ]);
    
        return redirect('/home');
    
      }

}
