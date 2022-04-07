<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class ordersController extends Controller
{
    public function indexInProgress()
    {
        // get all the orders
        $orders = Orders::all();

        // load the view and pass the orders
        return view('orders.inprogress-orders', compact('orders'));
    }

    public function indexCompleted()
    {
        // get all the orders
        $orders = Orders::all();

        // load the view and pass the orders
        return view('orders.completed-orders', compact('orders'));
    }

    public function create()
    {
        return view('orders.addorder');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:orders,name|string|max:100',
            'startdate' => 'required',
            'status' => 'required',
        ]);

        $order = new Orders;
        $order->name = $request->name;
        $order->batch = date('Y-m-d') ." - " . rand(0,99);
        $order->orderedby = Auth::user()->name;
        $order->startdate = $request->startdate;
        $order->enddate = $request->enddate;
        $order->status = $request->status;
        $order->notes = $request->notes;
        $order->save();

        if ($order->status == "Ready to Start" or $order->status == "In Progress" or $order->status == "Delayed") {

            return redirect('inprogress-orders')->with('status', 'New order created')->with('txtcolor', 'text-green-700')->with('brdcolor', 'border-green-300')->with('bgcolor', 'bg-green-100');
        } else {
            return redirect('completed-orders')->with('status', 'New order created')->with('txtcolor', 'text-green-700')->with('brdcolor', 'border-green-300')->with('bgcolor', 'bg-green-100');
        }
    }

    public function edit($id)
    {
        return view('orders.editorder');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function remove($id)
    {
        $order = Orders::find($id);
        $order->delete();

        //if ($order->status == "Ready to Start" or $order->status == "In Progress" or $order->status == "Delayed") {
            //return redirect('inprogress-orders')->with('status', 'Order Deleted')->with('txtcolor', 'text-red-700')->with('brdcolor', 'border-red-300')->with('bgcolor', 'bg-red-100');
        //} //else {
            //return redirect('completed-orders')->with('status', 'Order Deleted')->with('txtcolor', 'text-red-700')->with('brdcolor', 'border-red-300')->with('bgcolor', 'bg-red-100');
       // }
        return redirect('inprogress-orders');
    }

    public function multidelete(Request $request){
        $this->validate($request, [
            "list" => "required", // Object exist validation
        ]);

        $formData = $request->all();

        foreach ($formData['list'] as $id) {
            $order = Orders::find($id);
            $order->delete();
        }
        return redirect('inprogress-orders')->with('status', 'Orders Deleted')->with('txtcolor', 'text-red-700')->with('brdcolor', 'border-red-300')->with('bgcolor', 'bg-red-100');

    }
}
