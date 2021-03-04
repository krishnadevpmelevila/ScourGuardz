<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;
use App\Order;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

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
        
        
        
        $validatedData = $request->validate([
            
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'requirement' => 'required',
            'finalDate' => 'required',
            
        ]);


        
       
            $order = new Order();
            $order->name = request('name');
            $order->email = request('email');
            $order->phone = request('phone');
            $order->address = request('address');
            $order->landmark = request('landmark');
            $order->contactPreference = request('contactPreference');
            $order->area = request('area');
            $order->requirement = request('requirement');
            $order->finalDate = request('finalDate');
            
            $order->save();
        
       

       
        return view('thnkyou');
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
