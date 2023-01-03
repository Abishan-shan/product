<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //$register=DB::table('register')->get();
       
        $customer=DB::table('product')->get();
        return view('cusDash',compact('customer'));
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
        

        $register=DB::table('register')->where('email','=',session('email'))->get()->first();
        $emp=DB::table('employee')->get();
        $cush=DB::table('product')->where('id',$id)->first();
        return view('CushEdit',compact('cush','emp','register'));

    }

    public function order(Request $request)
    {
        //
        DB::table('orders')->insert([
            'name'=>$request->name,
            'price'=>$request->price,
            'detail'=>$request->detail,
            'empName'=>$request->empName,
            'cusName'=>$request->cusName,
            'cusAddress'=>$request->cusAddress,
            'cusMobile'=>$request->cusMobile
        ]);

        return redirect('/cusDashh');
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
