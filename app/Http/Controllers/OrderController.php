<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Order\StoreRequest;
use App\Http\Requests\Order\UpdateRequest;
use App\Models\Order;
use App\Models\Client;
use App\Models\Employee;

class OrderController extends Controller
{
    public function getAll(Request $request)
    {
        $orders = Order::orderBy("created_at", "desc")->paginate(12);
        return view('order.index', compact('orders'));
    }

    public function create()
    {
        $employees = Employee::all();
        $clients = Client::all();
        return view('order.create', compact ('employees', 'clients'));
    }

    public function store(StoreRequest $request){
        $order = Order::create($request->all());
    }

    public function show($id){
        $order = Order::findOrFail($id);
        return view('order.show', compact('order'));
    }

    public function edit($id){
        $order = Order::findOrFail($id);
        $employees = Employee::all();
        $clients = Client::all();
        return view('order.edit', compact ('employees', 'clients', 'order'));
    }
}
