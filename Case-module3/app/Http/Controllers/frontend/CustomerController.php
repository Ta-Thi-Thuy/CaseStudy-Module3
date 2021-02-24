<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function edit($id){
        $customer = Customer::findOrFail($id);
        return view('frontend.editCustomer',compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->user = $request->input('name');
        $customer->address = $request->input('address');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
//        $customer->password =Hash::make($request->password);
        $customer->save();

        return redirect()->route('customers.detail');
    }

}
