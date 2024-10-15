<?php

namespace App\Http\Controllers;
use App\Models\Site;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
   
    public function add()
    {
        return view('add');
    }

    public function addItem(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);
        $date= date("Y-m-d");

        $Site = new Site();
        $Site->name = $request->name;
        $Site->description = $request->description;
        $Site->price = $request->price;
        $Site->marketprice = $request->marketprice;
        $Site->quantity = $request->quantity;
        $Site->date = $date;

        $result = $Site->save();
        if($result){
            return back()->with('success','Product added successfully.');
        } else {
            return back()->with('fail','Something wrong!');
        }
    }

    public function placeorder(Request $request){
        $id = $request->id;
        $date = date("Y-m-d");
        $quantity = $request->quantity;

        
        $order = Site::where('id', $id)->first();
        $quantity1 = $order->quantity;
        $order2 = $quantity1 - $quantity;

        $order->name = $request->input('name');
        $order->price = $request->input('price');
        $order->marketprice = $request->input('marketprice');
        $order->description = $request->input('description');
        $order->quantity = $order2;

        
        $order-> update();

       

        $order1 = Order::all();
        if (Order::where('name', $request->input('name'))->where('date', $date)->exists()) {
            $order2 = Order::where('name', $request->input('name'))->first();
            $order2->name = $request->input('name');
            $order2->price = $request->input('price');
            $order2->description = $request->input('description');
            $order2->quantity += $quantity;
            $order2->date = $date;

            $order2-> update();
        }else{
            $order2 = new Order();
            $order2->name = $request->input('name');
            $order2->price = $request->input('price');
            $order2->description = $request->input('description');
            $order2->quantity = $quantity;
            $order2->date = $date;
            $order2-> save();
        }

        

        return back()->with('success','Product added successfully.');
    }

    public function index(Request $search)
    {
        $id = 0;
        // $Site = Site::where('id',$quan)->first();
        $sites = Site::where('quantity','>',0)->get();

        return view('home', compact('sites'));
    }

    public function search(Request $search){
        $search-> validate([
            'search' => 'required|max:40', 
        ]);

        $result = $search->input('search');
        $sites = Site::where('name', 'LIKE', "%{$result}%")->get();
        return view('home', compact('sites'));

    }

    public function finished(Request $request)
    {
        if($request->input('search')){
            $result = $request->input('search');
            $finished = Site::where('name', 'LIKE', "%{$result}%")->where('quantity','=', 0)->get();
        }else{
            $finished = Site::where('quantity','=', 0 )->get();
        }

        
        return view('finishedproducts',compact('finished'));
    }

    public function last(Request $request)
    {
        if($request->input('search')){
            $result = $request->input('search');
            $finished = Site::where('name', 'LIKE', "%{$result}%")->where('quantity','<', 5)->where('quantity','>', 0)->get();
        }else{
            $finished = Site::where('quantity','<', 5 )->where('quantity','>', 0)->get();
        }

        
        return view('lastproducts',compact('finished'));
    }

}
