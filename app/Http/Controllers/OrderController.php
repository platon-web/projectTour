<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all(); // array of objects
        return view('order/order', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'telephone' => 'required|string',
            'pip' => 'required|string',
            'email' => 'required|string',
            'tour_id' => 'required|int',
            'count_day' => 'required|int',
            'price' => 'required|int',
        ]);

        Order::create($data);

        $orders = Order::all();
        return view('order/order', ['orders' => $orders]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::find($id);
        return view('order/show', ['order' => $order]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Order::find($id);
        return view('order/edit', ['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = request()->validate([
            'telephone' => 'required|string',
            'pip' => 'required|string',
            'email' => 'required|string',
            'tour_id' => 'required|int',
            'count_day' => 'required|int',
            'price' => 'required|int',
        ]);
        Order::where('id', $id)->update($data);

        $orders = Order::all();
        return view('order/order', ['orders' => $orders]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::find($id);
        $order->delete();
        $orders = Order::all();
        return view('order/order', ['orders' => $orders]);
    }
}
