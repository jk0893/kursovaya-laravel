<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderStoreRequest;
use App\Http\Requests\OrderUpdateRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\Client;

class OrderController extends Controller
{
    public function getAll()
    {
        $orders = Order::paginate(12);
        return view('order.index', compact('orders'));
    }

    public function create()
    {
        return view('order.create');
    }

    public function store(OrderStoreRequest $request)
    {
        $data = $request->validated();
        Order::create($data);
        return redirect()->route('order.index');
    }

    public function show(Order $order)
    {
        return view('order.show', compact('order'));
    }

    public function edit(Order $order)
    {
        return view('order.edit', compact('order'));
    }

    public function update(Order $order, OrderUpdateRequest $request)
    {
        $data = $request->validated();
        $order->update($data);
        return redirect()->route('order.show', $order->id);
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('order.index');
    }
}
