<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipping;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class ShippingController extends Controller
{
    public function index()
    {
        $shipping = Shipping::all();
        return view ('logistics.index')->with('shipping', $shipping);
    }

    public function create()
    {
        return view('logistics.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        Shipping::create($input);
        return redirect('logistics')->with('flash_message', 'Shipment Added!');  
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
