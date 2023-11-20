<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Order\StoreRequest;
use App\Http\Requests\Order\UpdateRequest;
use App\Models\Order;

class BinController extends Controller
{
    public function getAll()
    {
        $orders = Order::where('client_id', Auth::user()->id)->orderBy("created_at", "desc")->paginate(6);
        return view('bin.index', compact('orders'));
    }

    public function store(Order $order)
    {
        $orders = Order::where('user_id', Auth::user()->id)->where('id', $order->id)->first();
        if ($orders) {
            return view('bin.index', compact('orders'));
        } else {
            return redirect()->back()->with('message','Заказ не найден');
        }

    }
}
