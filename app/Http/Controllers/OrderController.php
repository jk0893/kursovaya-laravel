<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Order\StoreRequest;
use App\Http\Requests\Order\UpdateRequest;
use App\Models\Order;

class OrderController extends Controller
{
    public function getAll(Request $request)
    {
        $orders = Order::orderBy("created_at","desc")->paginate(12);
        return view('order.index', compact('orders'));
    }

    public function store(StoreRequest $request){
        $order = Order::create($request->all());
    }
}
