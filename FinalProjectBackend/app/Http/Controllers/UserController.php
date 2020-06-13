<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $email = $request->input("email");
        $password = $request->input("password");
        $users = User::all()->where('email',  $email);
        $count = $users->count();
        if ($count == 0) {
            return Redirect::to(URL::previous())->with('message', 'Invalid  Username and or Passwords');
        }
        else {
            $data = DB::table('users')
                ->where('email', $email)
                -> get();
            foreach($data as $data) {
                $hashedpw = $data->password;
            }

            if(Hash::check($password, $hashedpw)){
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
            return view('dashboard/form');
        }
        }
    }

    public function logout(Request $request) {
        Session::flush();
        $request->session()->regenerate();
        // $request->session()->flush();
        return Redirect::to(".");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginindex()
    {
        if (Session::get('user_id') == ""){
            return view('login/login');
        } 
        else{
            return Redirect::to('/dashboard');
        }
    }

    /**
     * Show the form for creating a new USER.
     *
     * @return \Illuminate\Http\Response
     */
    public function signup(Request $request)
    {
        User::create([
            'name' => $request->input('name'),
            'binus_ID' => $request->input('binus_ID'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
          
        ]);

        return view('login/login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
