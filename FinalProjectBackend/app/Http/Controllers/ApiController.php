<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Traits\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


use App\Post;

use Response;
use Auth;


class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // start load Post gallery
    public function loadpostcs(Request $request)
    {
        $cs = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',1)
            ->get();
            return response()->json($cs);
    }
    public function loadpostdesign(Request $request)
    {
        $design = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',2)
            ->get();
            return response()->json($design);
    }
    public function loadpostib(Request $request)
    {
        $ib = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',3)
            ->get();
            return response()->json($ib);
    }
    public function loadpostbmm(Request $request)
    {
        $bmm = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',4)
            ->get();
            return response()->json($bmm);
    }
    public function loadpostfip(Request $request)
    {
        $fip = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',5)
            ->get();
            return response()->json($fip);
    }
    public function loadpostbis(Request $request)
    {
        $bis = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',6)
            ->get();
            return response()->json($bis);
    }
    
    public function loadpostcomm(Request $request)
    {
        $comm = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',7)
            ->get();
            return response()->json($comm);
    }
            
 // for end gallery

 // home post
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function randompostcs(Request $request)
    {
        $cs = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',1)
            ->inRandomOrder()
            ->first();
            return response()->json($cs);
            
    }
    public function randompostdesign(Request $request)
    {
        $design = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',2)
            ->inRandomOrder()
            ->first();
            return response()->json($design);
    }
    public function randompostib(Request $request)
    {
        $ib = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',3)
            ->inRandomOrder()
            ->first();
            return response()->json($ib);
    }
    public function randompostbmm(Request $request)
    {
        $bmm = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',4)
            ->inRandomOrder()
            ->first();
            return response()->json($bmm);
    }
    public function randompostfip(Request $request)
    {
        $fip = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',5)
            ->inRandomOrder()
            ->first();
            return response()->json($fip);
    }
    public function randompostbis(Request $request)
    {
        $bis = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',6)
            ->inRandomOrder()
            ->first();
            return response()->json($bis);
    }
    
    public function randompostcomm(Request $request)
    {
        $comm = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',7)
            ->inRandomOrder()
            ->first();
            return response()->json($comm);
    }
// end home post

// load blog details
    public function loadDetails($post_id)
    {
        $details = DB::table('posts')
        -> join('categories','categories.cat_id','=','posts.cat_id')
        // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        ->where('posts.post_id', $post_id)
        
        ->get();
        return response()->json($details);
    }
// end load blog detail

// delete post
    public function deletepost($post_id)
    {
        
        DB::delete('delete from posts where post_id = ?',[$post_id]);
        // ->delete();
        return response()->json(['message' => 'Deleted']);
    }

// end delete post

// SIGNUP USER
    public function store(Request $request)
    {
        $user = User::create([
                
            'name' => $request->name,
            'binus_ID' => $request->binus_ID,
            'email' => $request->email,
                'password' => Hash::make($request->password),
            
            ]);
            return response()->json(["message" => "berhasil"]);

    }
// END SIGNUP
    /**
     * login a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $users = User::all()->where('email',  $request->email);
        $count = $users->count();
        if ($count == 0) {
            return Redirect::to(URL::previous())->with('message', 'Invalid  Username and or Passwords');
        }
        else {
            $data = DB::table('users')
                ->where('email', $request->email)
                -> get();
            foreach($data as $data) {
                $hashedpw = $data->password;
            }

            if(Hash::check($request->password, $hashedpw)){
                $data = DB::table('users')
                            // -> join('addresses','addresses.addressid','=','users.addressID')
                            ->where('email',$request->input("email"))
                            -> get();
            
            foreach ($data as $dat) {
                $user_id = $dat->user_id;
                $name = $dat->name;
                $email = $dat->email;
                
                
            }
            Session::put('user_id',$user_id);
        
            Session::put('name',$name);
        
            Session::put('email',$email);
            return response()->json(["message" => "berhasil"]);
        }
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getUserID(Request $request)
    {
        $data = DB::table('users')
                ->where('email', $request->email)
                -> get();
                return response()->json($data);

    }
    public function createPost(Request $request)
    {
        $data =Post::create([
            'user_id' => $request->user_id,
            'cat_id' => $request->cat_id,
            'name' => $request->name,
            'img_url' => $request->img_url,
            'post_title' => $request->post_title,
            'post_description' => $request->post_description

            
        ]);
        return response()->json(["message" => "berhasil"]);

    }

    public function getDetailPost(Request $request)
    {
        $post = DB::table('posts')
            ->where('post_id',$request->id)
            -> get();
            return response()->json($post);

    }

    public function updatePost(Request $request)
    {
        $data = [
            // 'user_id' => $request->session()->get('user_id'),
            'cat_id' => $request->cat_id,
            'name' => $request->name,
            'img_url' => $request->img_url,
            'post_title' => $request->post_title,
            'post_description' => $request->post_description
        ];
        Post::where('post_id',$request->post_id)->update($data);

        return response()->json(["message" => "data updated"]);

    }

    public function getImageUrl(Request $request)
    {
        $data = DB::table('posts')
                ->where('post_id',$request->id)
                -> get();
        return response()->json($data);

    }

    public function getAllPost(Request $requets)
    {
        $post = DB::table('posts')->get();

        $count = $post->count();
        // return response()->json($count);
        return response()->json(['message' => $count]);
    }
    public function getLastID(Request $request)
    {
        $post_id = DB::table('posts')->get()->last()->post_id;
        return $post_id;
    }
}
