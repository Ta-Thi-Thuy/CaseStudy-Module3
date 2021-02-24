<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Orderdetail;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $orders = Order::all();
        $orderdetails = Orderdetail::paginate(5);
        return view('backend.orderdetails.list', compact('orderdetails','products', 'orders'));
    }

    public function create()
    {
        $products = Product::all();
        $orders = Order::all();
        return view('backend.orderdetails.create', compact('products','orders'));
    }

    public function store(Request $request)
    {
        $orderdetail = new Orderdetail();
        $orderdetail->orderNumber     = $request->input('orderNumber');
        $orderdetail->productCode    = $request->input('productCode');

        $orderdetail->quantity      = (integer)$request->input('quantity');
        $orderdetail->price  = (float)$request->input('price');
        $orderdetail->save();

        //tao moi xong quay ve trang danh sach khach hang
        return redirect()->route('orderdetails.list');
    }


    public function edit($id)
    {
        $orderdetail = Orderdetail::findOrFail($id);

        $order = Order::all();
        $product = Product::all();
        return view('backend.orderdetails.edit', compact('orderdetail','order', 'product'));
    }


    public function update(Request $request, $id)
    {
        $orderdetail = Orderdetail::findOrFail($id);
        $orderdetail->orderNumber = $request->input('orderNumber');
        $orderdetail->productCode = $request->input('productCode');
        $orderdetail->quantity = (integer)$request->input('quantity');

        $orderdetail->price = (float)$request->input('price');
        $orderdetail->save();

        return redirect()->route('orderdetails.list');
    }


    public function destroy($id)
    {
        $orderdetail = Orderdetail::find($id);
        $orderdetail->delate();
        return redirect()->route('orderdetails.list');
    }
}
