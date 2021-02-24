<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Orderdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function index()
    {
      $orders = Order::paginate(5);
      $customer = Customer::all();
      return view('backend.orders.list',compact('orders','customer'));
    }

    public function create()
    {
       $order = Customer::all();
        return view('backend.orders.create',compact('order'));
    }

    public function store(Request $request)
    {
        $order = new Order();
        $order->orderDate     = $request->input('orderDate');
        $order->requiredDate    = $request->input('requiredDate');
        $order->shippedDate      = $request->input('shippedDate');
        $order->status  = $request->input('status');
        $order->customerNumber =  $request->input('customerNumber');
        $order->save();

        //tao moi xong quay ve trang danh sach khach hang
        return redirect()->route('orders.list');
    }
    public function edit($id)
    {
        $order = Order::findOrFail($id);

        return view('backend.orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->orderDate = $request->input('orderDate');
        $order->requiredDate = $request->input('requiredDate');
        $order->shippedDate = $request->input('shippedDate');
        $order->status = $request->input('status');
        $order->save();

        return redirect()->route('orders.list');
    }

    public function destroy($id)
    {
        $orders = Order::find($id);
        $orders->Product()->detach();
        $orders->delete();
        return redirect()->route('orders.list');
    }

    public function show(Order $order ,$id)
    {
     $orderdetail = DB::table('orderdetails')->where('orderNumber', $id)->paginate(5);
     return view('backend.orders.show', compact('orderdetail'));
    }
}
