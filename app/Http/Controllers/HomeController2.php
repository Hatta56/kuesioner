<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\sysuser;


class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( request $request)
    {
        return view('home');
    }

    public function login(request $request)
    {
    $session = $request->session()->exists('userid');
    if(!$session){
        return view('auth.login');
    } else {
             return redirect('/');
           }
    }

    public function masuk(Request $request)
    {    
        $user_name  = $request->input('txtuser');
        $pwd        = sha1($request->input('txtpass'));
        $sys_user = new sysuser();
        $data = $sys_user::where([
            ['uname', '=', $user_name],['upass', '=', $pwd]
            ])->get();
        $user = NULL;
        foreach ($data as $key => $value) {
            $user = $value->uname;
            $nama = $value->namalengkap;
            $email = $value->email;
        }
        if($user){
            session([
                'userid'=> $user,
                'nama'=> $nama,
                'email'=> $email
            ]);
            $session = $request->session()->get('userid');
            if($session){
                return redirect('/');
            }
        }else{
            return redirect('/');
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
