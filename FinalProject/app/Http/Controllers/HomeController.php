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
use Illuminate\Support\Facades\Http;
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
        $cs = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/gallerycs');
        $cs = json_decode($cs->body(), true);
        

        $design = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/gallerydesign');
        $design = json_decode($design->body(), true);

        $ib = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/galleryib');
        $ib = json_decode($ib->body(), true);

        $bmm = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/gallerybmm');
        $bmm = json_decode($bmm->body(), true);

        $fip = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/galleryfip');
        $fip = json_decode($fip->body(), true);

        $bis = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/gallerybis');
        $bis = json_decode($bis->body(), true);

        $comm = Http::withHeaders([
            'Accept' => 'application/json',
            ])->get(env('API_URL','34.101.65.128').'/api/gallerycomm');
            $comm = json_decode($comm->body(), true);
        // dump($design);
        return view('gallery', compact('cs', 'design', 'ib', 'bmm', 'fip', 'bis', 'comm'));
            // dump($data);
            
        
        // $cs = DB::table('posts')
        //     -> join('categories','categories.cat_id','=','posts.cat_id')
        //     // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        //     ->where('categories.cat_id',1)
            
        //     ->get();
        // $design = DB::table('posts')
        // -> join('categories','categories.cat_id','=','posts.cat_id')
        // // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        // ->where('categories.cat_id',2)
        
        // ->get();
        // $ib = DB::table('posts')
        // -> join('categories','categories.cat_id','=','posts.cat_id')
        // // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        // ->where('categories.cat_id',3)
        
        // ->get();
        // $bmm = DB::table('posts')
        // -> join('categories','categories.cat_id','=','posts.cat_id')
        // // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        // ->where('categories.cat_id',4)
        
        // ->get();
        // $fip = DB::table('posts')
        // -> join('categories','categories.cat_id','=','posts.cat_id')
        // // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        // ->where('categories.cat_id',5)
        
        // ->get();
        // $bis = DB::table('posts')
        // -> join('categories','categories.cat_id','=','posts.cat_id')
        // // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        // ->where('categories.cat_id',6)
        
        // ->get();
        // $comm = DB::table('posts')
        // -> join('categories','categories.cat_id','=','posts.cat_id')
        // // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        // ->where('categories.cat_id',7)
        
        // ->get();
        // return "test";
    }
    /**
     * Display a listing of the resource in the P O S T Table.
     *
     * @return \Illuminate\Http\Response
     */
    public function loadtable()
    {
        $cs = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/postcs');
        
        $cs = json_decode($cs->body(), true);
        // dump($cs);
        // dump(count($cs));

        // dump($cs);

        $design = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/postdesign');
        $design = json_decode($design->body(), true);

        $ib = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/postib');
        $ib = json_decode($ib->body(), true);

        $bmm = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/postbmm');
        $bmm = json_decode($bmm->body(), true);

        $fip = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/postfip');
        $fip = json_decode($fip->body(), true);

        $bis = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/postbis');
        $bis = json_decode($bis->body(), true);

        $comm = Http::withHeaders([
            'Accept' => 'application/json',
            ])->get(env('API_URL','34.101.65.128').'/api/postcomm');
            $comm = json_decode($comm->body(), true);
            
        
        return view('dashboard/post', compact('cs', 'design', 'ib', 'bmm', 'fip', 'bis', 'comm'));
        // $cs = DB::table('posts')
        //     -> join('categories','categories.cat_id','=','posts.cat_id')
        //     // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        //     ->where('categories.cat_id',1)
            
        //     ->get();
        // $design = DB::table('posts')
        // -> join('categories','categories.cat_id','=','posts.cat_id')
        // // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        // ->where('categories.cat_id',2)
        
        // ->get();
        // $ib = DB::table('posts')
        // -> join('categories','categories.cat_id','=','posts.cat_id')
        // // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        // ->where('categories.cat_id',3)
        
        // ->get();
        // $bmm = DB::table('posts')
        // -> join('categories','categories.cat_id','=','posts.cat_id')
        // // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        // ->where('categories.cat_id',4)
        
        // ->get();
        // $fip = DB::table('posts')
        // -> join('categories','categories.cat_id','=','posts.cat_id')
        // // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        // ->where('categories.cat_id',5)
        
        // ->get();
        // $bis = DB::table('posts')
        // -> join('categories','categories.cat_id','=','posts.cat_id')
        // // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        // ->where('categories.cat_id',6)
        
        // ->get();
        // $comm = DB::table('posts')
        // -> join('categories','categories.cat_id','=','posts.cat_id')
        // // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        // ->where('categories.cat_id',7)
        
        // ->get();
    }

    /**
     * Display a listing of the resource in the P O S T blog.
     *
     * @return \Illuminate\Http\Response
     */
    public function loadblog()
    {
        // $cs = DB::table('posts')
        //     -> join('categories','categories.cat_id','=','posts.cat_id')
        //     // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        //     ->where('categories.cat_id',1)
            
        //     ->get();
        // $design = DB::table('posts')
        // -> join('categories','categories.cat_id','=','posts.cat_id')
        // // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        // ->where('categories.cat_id',2)
        
        // ->get();
        // $ib = DB::table('posts')
        // -> join('categories','categories.cat_id','=','posts.cat_id')
        // // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        // ->where('categories.cat_id',3)
        
        // ->get();
        // $bmm = DB::table('posts')
        // -> join('categories','categories.cat_id','=','posts.cat_id')
        // // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        // ->where('categories.cat_id',4)
        
        // ->get();
        // $fip = DB::table('posts')
        // -> join('categories','categories.cat_id','=','posts.cat_id')
        // // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        // ->where('categories.cat_id',5)
        
        // ->get();
        // $bis = DB::table('posts')
        // -> join('categories','categories.cat_id','=','posts.cat_id')
        // // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        // ->where('categories.cat_id',6)
        
        // ->get();
        // $comm = DB::table('posts')
        // -> join('categories','categories.cat_id','=','posts.cat_id')
        // // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        // ->where('categories.cat_id',7)
        
        // ->get();
        $cs = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/blogcs');
        $cs = json_decode($cs->body(), true);
        // dump($cs);

        $design = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/blogdesign');
        $design = json_decode($design->body(), true);

        $ib = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/blogib');
        $ib = json_decode($ib->body(), true);

        $bmm = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/blogbmm');
        $bmm = json_decode($bmm->body(), true);

        $fip = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/blogfip');
        $fip = json_decode($fip->body(), true);

        $bis = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/blogbis');
        $bis = json_decode($bis->body(), true);

        $comm = Http::withHeaders([
            'Accept' => 'application/json',
            ])->get(env('API_URL','34.101.65.128').'/api/blogcomm');
            $comm = json_decode($comm->body(), true);
        return view('blog', compact('cs', 'design', 'ib', 'bmm', 'fip', 'bis', 'comm'));
    }

    /**
     * Display a listing of the resource in the P O S T blog-DETAILS.
     *
     * @return \Illuminate\Http\Response
     */
    public function loadDetails($post_id)
    {
        $details = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/blog-detail/'.$post_id);
        $details = json_decode($details->body(), true);
        // dump($details);
        // $details = DB::table('posts')
        //     -> join('categories','categories.cat_id','=','posts.cat_id')
        //     // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        //     ->where('posts.post_id', $post_id)
            
        //     ->get();
        return view('blog-details', compact('details'));
    }

    /**
     * Randomize the form in home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function randompost()
    {
        // $cs = DB::table('posts')
        //     -> join('categories','categories.cat_id','=','posts.cat_id')
        //     // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        //     ->where('categories.cat_id',1)
        //     ->inRandomOrder()
        //     ->first();
        // $design = DB::table('posts')
        //     -> join('categories','categories.cat_id','=','posts.cat_id')
        //     // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        //     ->where('categories.cat_id',2)
        //     ->inRandomOrder()
        //     ->first();
        // $ib = DB::table('posts')
        //     -> join('categories','categories.cat_id','=','posts.cat_id')
        //     // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        //     ->where('categories.cat_id',3)
        //     ->inRandomOrder()
        //     ->first();
        // $bmm = DB::table('posts')
        //     -> join('categories','categories.cat_id','=','posts.cat_id')
        //     // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        //     ->where('categories.cat_id',4)
        //     ->inRandomOrder()
        //     ->first();
        // $fip = DB::table('posts')
        //     -> join('categories','categories.cat_id','=','posts.cat_id')
        //     // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        //     ->where('categories.cat_id',5)
        //     ->inRandomOrder()
        //     ->first();
        // $bis = DB::table('posts')
        //     -> join('categories','categories.cat_id','=','posts.cat_id')
        //     // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        //     ->where('categories.cat_id',6)
        //     ->inRandomOrder()
        //     ->first();
        // $comm = DB::table('posts')
        //     -> join('categories','categories.cat_id','=','posts.cat_id')
        //     // -> join('applications','applications.sent_from','=',$request->session()->get('detail_id'))
        //     ->where('categories.cat_id',7)
        //     ->inRandomOrder()
        //     ->first();
        //     // ->get();
        $cs1 = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/homecs');
        // dump($cs1)
        $cs1 = json_decode($cs1->body(), true);
        // dump($cs1);
        if(count($cs1) == 0)
        {
            $cs1 = 

                array('post_id' => '', 'user_id' => '', 'name' => '', 'img_url' => '', 'post_title' => '', 'post_description' => '', 'cat_name' => '')
            ;
            // dump($cs1);

        }
        // return count($cs1);
        // dump($cs1);
        // return $cs1['name'];
        $cs2 = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/homecs');
        $cs2 = json_decode($cs2->body(), true);
        // dump($cs2);
        if(count($cs2) == 0)
        {
            $cs2 = 

                array('post_id' => '', 'user_id' => '', 'name' => '', 'img_url' => '', 'post_title' => '', 'post_description' => '', 'cat_name' => '')
            ;
            // dump($cs1);

        }


        $design1 = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/homedesign');
        $design1 = json_decode($design1->body(), true);
        if(count($design1) == 0)
        {
            $design1 = 

                array('post_id' => '', 'user_id' => '', 'name' => '', 'img_url' => '', 'post_title' => '', 'post_description' => '', 'cat_name' => '')
            ;
            // dump($cs1);

        }
        $design2 = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/homedesign');
        $design2 = json_decode($design2->body(), true);
        if(count($design2) == 0)
        {
            $design2 = 

                array('post_id' => '', 'user_id' => '', 'name' => '', 'img_url' => '', 'post_title' => '', 'post_description' => '', 'cat_name' => '')
            ;
            // dump($cs1);

        }

        $ib1 = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/homeib');
        $ib1 = json_decode($ib1->body(), true);
        // dump($ib1);
        if(count($ib1) == 0)
        {
            $ib1 = 

                array('post_id' => '', 'user_id' => '', 'name' => '', 'img_url' => '', 'post_title' => '', 'post_description' => '', 'cat_name' => '')
            ;
            // dump($cs1);

        }
        $ib2 = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/homeib');
        $ib2 = json_decode($ib2->body(), true);
        if(count($ib2) == 0)
        {
            $ib2 = 

                array('post_id' => '', 'user_id' => '', 'name' => '', 'img_url' => '', 'post_title' => '', 'post_description' => '', 'cat_name' => '')
            ;
            // dump($cs1);

        }
        $bmm1 = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/homebmm');
        $bmm1 = json_decode($bmm1->body(), true);
        
        if(count($bmm1) == 0)
        {
            $bmm1 = 

                array('post_id' => '', 'user_id' => '', 'name' => '', 'img_url' => '', 'post_title' => '', 'post_description' => '', 'cat_name' => '')
            ;
            // dump($cs1);

        }
        $bmm2 = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/homebmm');
        $bmm2 = json_decode($bmm2->body(), true);
        if(count($bmm2) == 0)
        {
            $bmm2 = 

                array('post_id' => '', 'user_id' => '', 'name' => '', 'img_url' => '', 'post_title' => '', 'post_description' => '', 'cat_name' => '')
            ;
            // dump($cs1);

        }
        $fip1 = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/homefip');
        $fip1 = json_decode($fip1->body(), true);
        if(count($fip1) == 0)
        {
            $fip1 = 

                array('post_id' => '', 'user_id' => '', 'name' => '', 'img_url' => '', 'post_title' => '', 'post_description' => '', 'cat_name' => '')
            ;
            // dump($cs1);

        }
        $fip2 = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/homefip');
        $fip2 = json_decode($fip2->body(), true);
        if(count($fip2) == 0)
        {
            $fip2 = 

                array('post_id' => '', 'user_id' => '', 'name' => '', 'img_url' => '', 'post_title' => '', 'post_description' => '', 'cat_name' => '')
            ;
            // dump($cs1);

        }
        $bis1 = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/homebis');
        $bis1 = json_decode($bis1->body(), true);
        if(count($bis1) == 0)
        {
            $bis1 = 

                array('post_id' => '', 'user_id' => '', 'name' => '', 'img_url' => '', 'post_title' => '', 'post_description' => '', 'cat_name' => '')
            ;
            // dump($bis1);

        }
        $bis2 = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/homebis');
        $bis2 = json_decode($bis2->body(), true);
        if(count($bis2) == 0)
        {
            $bis2 = 

                array('post_id' => '', 'user_id' => '', 'name' => '', 'img_url' => '', 'post_title' => '', 'post_description' => '', 'cat_name' => '')
            ;
            // dump($cs1);

        }
        $comm1 = Http::withHeaders([
            'Accept' => 'application/json',
            ])->get(env('API_URL','34.101.65.128').'/api/homecomm');
            $comm1 = json_decode($comm1->body(), true);
            if(count($comm1) == 0)
            {
                $comm1 = 
    
                    array('post_id' => '', 'user_id' => '', 'name' => '', 'img_url' => '', 'post_title' => '', 'post_description' => '', 'cat_name' => '')
                ;
                // dump($cs1);
    
            }
        
        $comm2 = Http::withHeaders([
            'Accept' => 'application/json',
            ])->get(env('API_URL','34.101.65.128').'/api/homecomm');
            $comm2 = json_decode($comm2->body(), true);
            if(count($comm2) == 0)
            {
                $comm2 = 
    
                    array('post_id' => '', 'user_id' => '', 'name' => '', 'img_url' => '', 'post_title' => '', 'post_description' => '', 'cat_name' => '')
                ;
                // dump($cs1);
    
            }
            return view('index', compact('cs1', 'cs2', 'design1', 'design2' , 'ib1' , 'ib2', 'bmm1' , 'bmm2' , 'fip1', 'fip2' , 'bis1', 'bis2' , 'comm1' , 'comm2'));
    }

    /**
     * Store a newly created resource in gallery.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createpost(Request $request)
    {
        $counts = Http::withHeaders([
            'Accept' => 'application/json',
        ])->get(env('API_URL','34.101.65.128').'/api/getAllPost');
        $test = json_decode($counts->body(),true);
        $count = $test['message'];
        // $user = json_decode($count->body(), true);
        // dump($count);

        if ($count == 0) {
            $post_id = 1;

        }
        else{
            // $post_id = DB::table('posts')->get()->last()->post_id;
            $test = Http::get(env('API_URL','34.101.65.128').'/api/getLastID'); 
            $post_id = json_decode($test->body(),true);

            $post_id += 1;
        }
        $image = $request->file('image');
        $this->validate($request, [
            'image' => 'mimes:jpeg,png,bmp,tiff |max:4096',
        ],
        $messages = [
            'required' => 'The :attribute field is required.',
            'mimes' => 'Only jpeg, png, bmp,tiff are allowed.'
            ]
        );
        
        // $input['imagename'] =  $image -> getClientOriginalName();
        $input['imagename'] =  $post_id.'.'.$image->getClientOriginalExtension();
        $image_url = $input['imagename'];
        $destinationPath = public_path('/img/post');
        $image->move($destinationPath,$image_url);
        
        $response= Http::withHeaders([
            'Accept' => 'application/json',


        ])->post(env('API_URL','34.101.65.128').'/api/createPost', [
            'user_id' => $request->session()->get('user_id'),
            'cat_id' => $request->input('major'),
            'name' => $request->input('name'),
            'img_url' => $image_url,
            'post_title' => $request->input('title'),
            'post_description' => $request->input('text')

        ]); 
        $insert = json_decode($response->body(), true);
        // dump($insert);
        // Post::create([
        //     'user_id' => $request->session()->get('user_id'),
        //     'cat_id' => $request->input('major'),
        //     'name' => $request->input('name'),
        //     'img_url' => $image_url,
        //     'post_title' => $request->input('title'),
        //     'post_description' => $request->input('text')
        // ]);
        

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

            $post = DB::table('posts')
            ->where('post_id',$id)
            -> get();

            
        $response= Http::withHeaders([
            'Accept' => 'application/json',


        ])->get(env('API_URL','34.101.65.128').'/api/getDetailPost', [
            'id' => $id

        ]); 
        $post = json_decode($response->body(), true);
            // dump($post);
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
            // $data = DB::table('posts')
            //     ->where('post_id',$id)
            //     -> get();
            $response= Http::withHeaders([
                'Accept' => 'application/json',
    
    
            ])->get(env('API_URL','34.101.65.128').'/api/getImageUrl', [
                'id' => $request->$post_id
            ]);             
            $data = json_decode($response->body(), true);
            // dump($data);
            // return $data;
            foreach ($data as $data) {

                $input['imagename'] = $data['img_url'];
                $image_url = $input['imagename'];
            }

        }else{

            // $input['imagename'] =  $image -> getClientOriginalName();
            $input['imagename'] =  $post_id.'.'.$image->getClientOriginalExtension();
            $image_url = $input['imagename'];
            $destinationPath = public_path('/img/post');
            $image->move($destinationPath,$image_url);
        }

        $response= Http::withHeaders([
            'Accept' => 'application/json',


        ])->patch(env('API_URL','34.101.65.128').'/api/updatePost', [
            'cat_id' => $request->input('major'),
            'name' => $request->input('name'),
            'img_url' => $image_url,
            'post_title' => $request->input('title'),
            'post_description' => $request->input('text'),
            'post_id' => $post_id
        ]); 
        $update = json_decode($response->body(), true);
        // dump($update);
        // $data = [
        //     // 'user_id' => $request->session()->get('user_id'),
        //     'cat_id' => $request->input('major'),
        //     'name' => $request->input('name'),
        //     'img_url' => $image_url,
        //     'post_title' => $request->input('title'),
        //     'post_description' => $request->input('text')
        // ];




        // Post::where('post_id',$post_id)->update($data);


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
        
        // DB::delete('delete from posts where post_id = ?',[$post_id]);
        // // ->delete();
        $delete = Http::withHeaders([
            'Accept' => 'application/json',
        ])->delete(env('API_URL','34.101.65.128').'/api/deletepost/'.$post_id);
        
        return Redirect::to("post");
        
    }
}
