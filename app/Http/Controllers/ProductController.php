<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Hash;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('login');
    }

    public function register()
    {
        //

        return view('registration');
    }

    public function login()
    {
        //

        return view('login');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' =>  'required|min:6|max:10',

        ]);
        
        DB::table('register')->insert([
            'name' => $request->name, 
            'email' => $request->email,
            'gender' =>  $request->gender,
            'address' =>  $request->address,
            'mobileno' =>  $request->mobileno,
            'password' => Hash::make($request->password)
        ]);

        return redirect('login')->with('success',"added");

    }


    public function loginValidate(Request $request)
    {
        //
        $request->validate([
            'email' => 'required',
            'password' =>  'required',

        ]);
        $data=$request->input();
        $email=DB::table('register')->where('email','=',$request->email)->first();
        $password=DB::table('register')->where('password','=',$request->password)->first();
        $email1=DB::table('admin')->where('email','=',$request->email)->first();
        $password1=DB::table('admin')->where('password','=',$request->password)->first();
        $email2=DB::table('employee')->where('email','=',$request->email)->first();
        $password2=DB::table('employee')->where('password','=',$request->password)->first();

        if($email1)
        {

            if($password1)
            {
                return redirect('/dashh');
            }

            return redirect('/')->with('error',"enter correct  password"); 
        }

       
        if($email)
        {
            if($password)
            {
               
               $request->session()->put('email',$data['email']);
                
                return redirect()->route('cus.store');
            }

            return redirect('/')->with('error',"enter correct  password"); 
        }

        if($email2)
        {
            if($password2)
            {
               
               $request->session()->put('email',$data['email']);
                
                return redirect()->route('emp.view');
            }

            return redirect('/')->with('error',"enter correct  password"); 
        }
       

       return redirect('/')->with('error',"enter correct email and password");

    }

    public function dashboard()
    {
        
            return view('dashboard');
       
    }

    public function cusDashboard()
    {
        
            return view('cusDash');
       
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
        //Auth::flush();
        
    }
}
