<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\model1 as Posts;
use App\komentarmodel as komentarmodel;
use Auth;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class DetailPostController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function comment(Request $request)
  {
    $komen = $request->fieldkomen;
    $user_id = Auth::user()->id;
    $post_id = $request->postcomment;

    komentarmodel::insert([
      'user_id' => $user_id,
      'post_id' => $post_id,
      'comment' => $komen,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    ]);

    return redirect('/home');
  }

  public function detailpost($id){
    $data = Posts::with('users')
    ->with('komentar_post')
    ->where('id', $id)
    ->get();

    //return $data[0]->users->name;

    return view('detailpost', ['post' => $data[0]] );
  }

}
