<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderSouvenir;
use App\Souvenir;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Http\Controllers\AuthController;

class OrderController extends Controller
{
    public function Create(Request $request)
    {

        if (Session::has('user')) {
            $user = Session::get('user');
            $Total = 0;
            if (Session::has('cart')) {
                $Total = Session::get('cart')->Total();
            }
            if ($Total == 0) {
                $disabled = 'disabled';
            } else {
                $disabled = '';
            }

            $totalMoney = '$' . number_format($Total, 2);
            return view('Orders.Create', compact('user', 'totalMoney', 'disabled'));
        }
        Session::put('oldUrl', $request->url());
        return redirect(route('login'));
    }

    public function CreatePost(Request $request)
    {
        AuthController::IsUser();
        $validator = Validator::make($request->all(), [
            'FullName' => 'required|max:100',
            'MobilePhoneNumber' => 'required|max:30',
            'Address' => 'required|max:100'
        ]);

        if ($validator->fails()) {
            return redirect('Orders/Create')
                ->withErrors($validator)
                ->withInput();
        }

        $order = new Order([
            'FullName' => $_POST['FullName']
            , 'MobilePhoneNumber' => $_POST['MobilePhoneNumber']
            , 'Address' => $_POST['Address']
            , 'SubTotal' => Session::get('cart')->SubTotal()
            , 'GST' => Session::get('cart')->Gst()
            , 'Total' => Session::get('cart')->Total()
            , 'user_id' => Session::get('user')->id
        ]);
        $order->save();

        foreach (Session::get('cart')->cartItems as $cartItem) {
            $order_souvenir = new OrderSouvenir([
                'order_id' => $order->id
                , 'souvenir_id' => $cartItem->souvenir->id
                , 'UnitPrice' => $cartItem->price
                , 'Quantity' => $cartItem->count
            ]);
            $order_souvenir->save();
        }
        Session::forget('cart');
        $url = str_replace('Create', 'Purchased/' . $order->id, $request->url());
        return redirect()->to($url);
    }

    public function Purchased(Request $request,$id)
    {
        AuthController::IsUser();
        $order=Order::find($id);

        return view('Orders.Purchased',compact('order'));
    }



    public function index()
    {
        AuthController::IsAdmin();
        $orders=Order::all();

        return view('Orders.index',compact('orders'));
    }

    public function Details($id)
    {
        AuthController::IsAdmin();
        $order=Order::find($id);


        return view('Orders.Details', compact('order'));
    }


    public function Ship($id)
    {
        AuthController::IsAdmin();
        $order=Order::find($id);
        if ($order->OrderStatus==='Waiting'){
            DB::table('orders')
                ->where('id', $id)
                ->update(['OrderStatus' => 'Shipped']);
        }

        return redirect()->route('orderIndex');
    }


}

