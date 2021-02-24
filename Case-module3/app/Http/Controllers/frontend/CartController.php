<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function updateCart(Request $request)
    {
        foreach ($request->cart as $id => $qty) {
            foreach (Cart::content() as $rowid => $cart_item) {
                if ($id == $cart_item->id) {
                    Cart::update($cart_item->rowId, $qty);
                }
            }
        }
        return redirect()->route('page.cart');
    }
    public function index(){
        // Dat discount cho tung san pham o cart.
        foreach (Cart::content() as $cart_item){
            Cart::setDiscount($cart_item->rowId, $cart_item->options->discount);
        }
        $cart = Cart::content();
        $count = Cart::count();
//        $totalprice = Cart::total();
        $total = Cart::subtotal();
        return view('frontend.cart',compact('cart','count','total'));
    }
    public function addToCart($id){
        $product = Product::findOrFail($id);
        $cartInfo=[
          'id'=>$id,
          'name'=>$product->productName,
            'price' => $product->price,
          'qty'=>'1',
            'options' =>[
                'img'=> $product->img,
                'voucher'=>$product->price * (1 - ($product->voucher/100)),
                'discount'=>$product->voucher,
            ]
        ];
        Cart::add($cartInfo);

        return redirect()->back();
    }

    public function removeProductIntoCart($id)
    {
        $cart = Cart::content();
        foreach ($cart as $value) {
            if ($value->id == $id)
                $rowId = $value->rowId;
        }
        Cart::remove($rowId);
        return redirect()->back();
    }

    public function showCheckout(){
        $cart = Cart::content();
        $count = Cart::count();
        $totalprice = Cart::subtotal();
        //$customer = Auth::guard('customer')->user();
        return view('frontend.checkout',compact('cart','count','totalprice'));
    }

    public function checkOutBank(Request $request, Customer $customer, Order $order,Product $product)
    {
                $carts = Cart::content();
                foreach ($carts as $cart) {
                    $product_id = $cart->id;
                    $customer_id = Auth::guard('customer')->id();
                    $order->orderDate = date('Y-m-d ');
                    $order->requiredDate =date('Y-m-d', strtotime( $order->orderDate . " +2 days"));;
                    $order->shippedDate = date('Y-m-d', strtotime( $order->orderDate . " +4 days"));;
                    $order->customerNumber = $customer_id;
                    $order->status = 'New';
                    $order->save();

                    $ctm = $customer::findOrFail($customer_id);
                    $ctm->user = $request->user;
                    $ctm->email = $request->email;
                    $ctm->phone = $request->phone;
                    $ctm->address = $request->address;
                    $ctm->save();
                    DB::connection()->enableQueryLog();
                    $product = Product::find($product_id);
                    $product->orders()->attach($order->id, [
                            'quantity' => (int) $cart->qty,
                            'price' =>(int) $cart->options->voucher ,
                        ]
                    );
                }
                Cart::destroy();
                return view('frontend.cod');
    }


}
