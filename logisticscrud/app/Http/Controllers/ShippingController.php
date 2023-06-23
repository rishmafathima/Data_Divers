<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipping;
use App\Models\Order;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Pagination\LengthAwarePaginator;


class ShippingController extends Controller
{
    public function index()
    {
        $order = Order::where('o_isShip', 1)->get();
        $shipping = Shipping::all();
    
        return view('logistics.index')->with('order', $order)->with('shipping', $shipping);
    }

    public function create($o_id)
    {
        $shp_oid = $o_id;

        return view('logistics.create', compact('shp_oid'));
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        Shipping::create($input);
        
        $orderId = $input['shp_oid'];
        $order = Order::find($orderId);
        $order->o_isShip = 2;
        $order->save();

        return redirect('logistics')->with('flash_message', 'Shipment Added!');  
    }

    public function show($id)
    {
        $shipping = Shipping::find($id);
        return view('logistics.show')->with('shipping', $shipping);
    }


    public function edit($shp_id)
    {
        $shipping = Shipping::find($shp_id);
        return view('logistics.edit')->with('shipping', $shipping);
    }

    public function update(Request $request, $shp_id)
    {
        $shipping = Shipping::find($shp_id);
        $input = $request->all();
        $shipping->update($input);
        return redirect('logistics')->with('flash_message', 'Shipment Updated!');
    }

    public function destroy($shp_id)
    {
        Shipping::destroy($shp_id);
        return redirect('logistics')->with('flash_message', 'Shipment deleted!');
    }
}
