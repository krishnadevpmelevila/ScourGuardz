<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Feedback;

class HomeController extends Controller
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
        return view('welcome');
    }
    public function order()
    {
        $order=Order::latest()->get();;
        $data=[
            "name"=>$order
            
            
            
            
            
        ];
        
        return view("admin.orders", $data);  
    }
    public function review()
    {
        $feedback=Feedback::latest()->get();;
        $data=[
            "name"=>$feedback
            
            
            
            
            
        ];
        
        return view("admin.review", $data);  
    }
    public function destroy($id)
    {
       
        Order::find($id)->delete();
    	return redirect('/order')	;
    }

    public function revDestroy($id)
    {
       
        Feedback::find($id)->delete();
    	return redirect('/review')	;
    }

}
