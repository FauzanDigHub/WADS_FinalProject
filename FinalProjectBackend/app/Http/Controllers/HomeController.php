<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Traits\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Post;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource in the gallery.
     *
     * @return \Illuminate\Http\Response
     */
    public function loadpost()
    {
        $cs = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',1)
            
            ->get();
        dump($cs);
        $design = DB::table('posts')
        -> join('categories','categories.cat_id','=','posts.cat_id')
        // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        ->where('categories.cat_id',2)
        
        ->get();
        $ib = DB::table('posts')
        -> join('categories','categories.cat_id','=','posts.cat_id')
        // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        ->where('categories.cat_id',3)
        
        ->get();
        $bmm = DB::table('posts')
        -> join('categories','categories.cat_id','=','posts.cat_id')
        // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        ->where('categories.cat_id',4)
        
        ->get();
        $fip = DB::table('posts')
        -> join('categories','categories.cat_id','=','posts.cat_id')
        // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        ->where('categories.cat_id',5)
        
        ->get();
        $bis = DB::table('posts')
        -> join('categories','categories.cat_id','=','posts.cat_id')
        // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        ->where('categories.cat_id',6)
        
        ->get();
        $comm = DB::table('posts')
        -> join('categories','categories.cat_id','=','posts.cat_id')
        // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        ->where('categories.cat_id',7)
        
        ->get();
        return view('gallery', compact('cs', 'design', 'ib', 'bmm', 'fip', 'bis', 'comm'));
    }
    /**
     * Display a listing of the resource in the P O S T Table.
     *
     * @return \Illuminate\Http\Response
     */
    public function loadtable()
    {
        $cs = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',1)
            
            ->get();
        $design = DB::table('posts')
        -> join('categories','categories.cat_id','=','posts.cat_id')
        // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        ->where('categories.cat_id',2)
        
        ->get();
        $ib = DB::table('posts')
        -> join('categories','categories.cat_id','=','posts.cat_id')
        // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        ->where('categories.cat_id',3)
        
        ->get();
        $bmm = DB::table('posts')
        -> join('categories','categories.cat_id','=','posts.cat_id')
        // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        ->where('categories.cat_id',4)
        
        ->get();
        $fip = DB::table('posts')
        -> join('categories','categories.cat_id','=','posts.cat_id')
        // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        ->where('categories.cat_id',5)
        
        ->get();
        $bis = DB::table('posts')
        -> join('categories','categories.cat_id','=','posts.cat_id')
        // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        ->where('categories.cat_id',6)
        
        ->get();
        $comm = DB::table('posts')
        -> join('categories','categories.cat_id','=','posts.cat_id')
        // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        ->where('categories.cat_id',7)
        
        ->get();
        return view('dashboard/post', compact('cs', 'design', 'ib', 'bmm', 'fip', 'bis', 'comm'));
    }

    /**
     * Display a listing of the resource in the P O S T blog.
     *
     * @return \Illuminate\Http\Response
     */
    public function loadblog()
    {
        $cs = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',1)
            
            ->get();
        $design = DB::table('posts')
        -> join('categories','categories.cat_id','=','posts.cat_id')
        // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        ->where('categories.cat_id',2)
        
        ->get();
        $ib = DB::table('posts')
        -> join('categories','categories.cat_id','=','posts.cat_id')
        // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        ->where('categories.cat_id',3)
        
        ->get();
        $bmm = DB::table('posts')
        -> join('categories','categories.cat_id','=','posts.cat_id')
        // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        ->where('categories.cat_id',4)
        
        ->get();
        $fip = DB::table('posts')
        -> join('categories','categories.cat_id','=','posts.cat_id')
        // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        ->where('categories.cat_id',5)
        
        ->get();
        $bis = DB::table('posts')
        -> join('categories','categories.cat_id','=','posts.cat_id')
        // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        ->where('categories.cat_id',6)
        
        ->get();
        $comm = DB::table('posts')
        -> join('categories','categories.cat_id','=','posts.cat_id')
        // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        ->where('categories.cat_id',7)
        
        ->get();
        return view('blog', compact('cs', 'design', 'ib', 'bmm', 'fip', 'bis', 'comm'));
    }

    /**
     * Display a listing of the resource in the P O S T blog-DETAILS.
     *
     * @return \Illuminate\Http\Response
     */
    public function loadDetails($post_id)
    {
        $details = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('posts.post_id', $post_id)
            
            ->get();
        return view('blog-details', compact('details'));
    }

    /**
     * Randomize the form in home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function randompost()
    {
        $cs = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',1)
            ->inRandomOrder()
            ->first();
        $design = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',2)
            ->inRandomOrder()
            ->first();
        $ib = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',3)
            ->inRandomOrder()
            ->first();
        $bmm = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',4)
            ->inRandomOrder()
            ->first();
        $fip = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',5)
            ->inRandomOrder()
            ->first();
        $bis = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',6)
            ->inRandomOrder()
            ->first();
        $comm = DB::table('posts')
            -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
            ->where('categories.cat_id',7)
            ->inRandomOrder()
            ->first();
            // ->get();
            // return view('index', compact('cs', 'design', 'ib', 'bmm', 'fip', 'bis', 'comm'));
    }

    /**
     * Store a newly created resource in gallery.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createpost(Request $request)
    {
        $image = $request->file('image');
        $this->validate($request, [
            'image' => 'mimes:jpeg,png,bmp,tiff |max:4096',
        ],
        $messages = [
            'required' => 'The :attribute field is required.',
            'mimes' => 'Only jpeg, png, bmp,tiff are allowed.'
            ]
        );
        
        $post = Post::all();

        $count = $post->count();
        if ($count == 0) {
            $post_id = 1;

        }
        else{
            $post_id = DB::table('posts')->get()->last()->post_id;
            $post_id += 1;
        }
        // $image = $request->file('image');
        $input['imagename'] =  $post_id.'.'.$image->getClientOriginalExtension();
        // $input['imagename'] =  $image -> getClientOriginalName();
        $image_url = $input['imagename'];
        $destinationPath = public_path('/img/post');
        $image->move($destinationPath,$image_url);
        
        
        Post::create([
            'user_id' => $request->user_id,
            'cat_id' => $request->major,
            'name' => $request->name,
            'img_url' => $request->img_url,
            'post_title' => $request->post_title,
            'post_description' => $request->post_description
        ]);


        return Redirect::to('/gallery');
    }

    /**
     * Retrieve the specified resource from Database before Updating the FORM.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function retrievepost($id)
    {
        // if (Session::get('login') == FALSE){
        //     return view("login/login");
        // }
        // else{

            $post = Post::where('post_id', $id)->first();

            // $data = DB::table('posts')
            // -> join('categories','categories.cat_id','=','posts.cat_id')
            // -> join('users','users.user_id','=','posts.user_id')
            // ->where('post_id',$request->session()->get('post_id'))
            // -> get();
            // foreach ($data as $dat) {
            //     $user_id = $dat->user_id;
            //     $name = $dat->name;
            //     $email = $dat->email;
                
            // }
            // Session::put('user_id',$user_id);
        
            // Session::put('name',$name);
        
            // Session::put('email',$email);
            return view("dashboard/update", compact('post'));
        // }
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
    public function updatepost(Request $request, $post_id)
    {
        $image = $request->file('image');

        if($image == ""){
            $data = DB::table('posts')
                ->where('post_id',$id)
                -> get();
            foreach ($data as $data) {

                $input['imagename'] = $data->img_url;
                $image_url = $input['imagename'];
            }

        }else{

            $input['imagename'] =  $post_id.'.'.$image->getClientOriginalExtension();
            // $input['imagename'] =  $image -> getClientOriginalName();
            $image_url = $input['imagename'];
            $destinationPath = public_path('/img/post');
            $image->move($destinationPath,$image_url);
        }


        $data = [
            // 'user_id' => $request->session()->get('user_id'),
            'cat_id' => $request->input('major'),
            'name' => $request->input('name'),
            'img_url' => $image_url,
            'post_title' => $request->input('title'),
            'post_description' => $request->input('text')
        ];




        Post::where('post_id',$post_id)->update($data);


        return Redirect::to("/gallery");
    }

    /**
     * Remove the specified resource from post note table POSTS.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletepost($post_id)
    {
        
        DB::delete('delete from posts where post_id = ?',[$post_id]);
        // ->delete();
        return Redirect::to("post");
    }
}
