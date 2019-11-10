<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\model1 as Posts;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Storage;

class EditProfileController extends Controller
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
        
        return view('editprofile', [
        ]);
        */
        
        $id = Auth::user()->id;
        $data = User::find($id);

    return view('editprofile', ['data' => $data]);
    }

    public function updateee(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
    
        if ($request->has('profile')) {
          Storage::disk('public')->delete($data->avatar);
          $ava = $request->file('profile')->store('avatars', 'public');
        }else{
          $ava = $data->avatar;
        }
    
        User::where('id', $id)->update([
          'title' => $request->title,
          'description' => $request->desc,
          'url' => $request->url,
          'avatar' => $ava,
        ]);
    
        return redirect('/profile');
    
      }
}
