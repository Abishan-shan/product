<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $employee=DB::table('employee')->where('email',session('email'))->get()->first();
        
        $name=$employee->name;

        $order=DB::table('orders')->where('empName',$name)->get();
        return view('empView',compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reset()
    {
        //
        return view('reset');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        
        $products=DB::table('product')->get();
        $store=DB::table('employee')->get();
        return view('dashboard',compact('store','products'));
    
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
        $emp=DB::table('employee')->where('id',$id)->first();
        return view('empShow',compact('emp'));
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
        $emp=DB::table('employee')->where('id',$id)->first();
        return view('empEdite',compact('emp'));
        
    }

    public function delete($id)
    {
        //
        DB::table('employee')->where('id',$id)->delete();
        return back()->with('success','deleted');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

        DB::table('employee')->where('id',$request->id)->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'address'=> $request->address,
            'mobile'=>$request->mobile
        ]);

        return redirect('/dashh');

    }

    public function reupdate(Request $request)
    {
        $employee=DB::table('employee')->where('email',session('email'))->get()->first();
        
        
        
        if($employee->password == $request->cuPassword)
        {
            if($request->NewPassword == $request->ConfirmPassword)
            {
                DB::table('employee')->where('email',session('email'))->update([
                    'password' => $request->NewPassword
                ]);
                return redirect('/empView');
            }
            return redirect('/reset')->with('error','type correct password');
        }

        return redirect('/reset')->with('error','type correct password');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
        Auth::logout();

        return redirect('/');
    }
}
