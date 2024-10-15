<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Order;
use App\Models\Site;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class StaffController extends Controller
{
   

    //Registration
    public function registration()
    {
        return view('register');
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email:Staffs',
            'password'=>'required|min:8|max:12'
        ]);

        $Staff = new Staff();
        $Staff->name = $request->name;
        $Staff->email = $request->email;
        $Staff->password = $request->password;

        $result = $Staff->save();
        if($result){
            return back()->with('success','You have registered successfully.');
        } else {
            return back()->with('fail','Something wrong!');
        }
    }
    ////Login
    public function login()
    {
        return view('login');
    }
    public function loginUser(Request $request)
    {
        $request->validate([            
            'email'=>'required|email:Staffs',
            'password'=>'required|min:8|max:12'
        ]);

        $Staff = Staff::where('email','=',$request->email)->first();
        if($Staff){
            if(Hash::check($request->password, $Staff->password)){
                $request->session()->put('loginId', $Staff->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail','Password not match!');
            }
        } else {
            return back()->with('fail','This email is not register.');
        }        
    }

    
    //// Dashboard
    public function dashboard(Request $request)
    {
        // return "Welcome to your dashabord.";
        $date2 = date("Y-m-d");
        $place = "";
        if($request->input('date') != ''){
            $date = $request->input('date');
        }else{
            $date =date("Y-m-d");
        }

        

        //real dashboard
        $data = array();
        if(Session::has('loginId')){
            $data = Staff::where('id','=',Session::get('loginId'))->first();
        }
        
        if($request->input('time') == 'week'){
            $startdate = date("2024-m-d");
            $enddate = date('Y-m-d', strtotime(' - 7 days'));
            $orders = Order::whereBetween('date', [$enddate, $startdate])->get();
            $place = 'Last Week';
        }elseif($request->input('time') == 'month'){
            $startdate = date("2024-m-d");
            $enddate = date('Y-m-d', strtotime(' - 30 days'));
            $orders = Order::whereBetween('date', [$enddate, $startdate])->get();
            $place='Last Month';
        }elseif($request->input('time') == 'today'){
            $orders = Order::where('date','=', $date )->get();
            $place = 'Todays';
        }
        elseif($request->input('time') == ''){
            $orders = Order::where('date','=', $date )->get();
            $place = 'Todays';
        }
        
        if($request->input('search')){
            $result = $request->input('search');
            $orders = Order::where('name', 'LIKE', "%{$result}%")->get();
            $place = 'Todays';
        }

        $site = Site::count();
        $finished = Site::where('quantity','=', 0 )->get()->count();
        $last = Site::where('quantity','<', 5 )->where('quantity','>', 0)->get()->count();

        
        return view('dashboard',compact('data', 'orders', 'site', 'place', 'finished', 'last'));
    }
    ///Logout
    public function logout()
    {
        $data = array();
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
}