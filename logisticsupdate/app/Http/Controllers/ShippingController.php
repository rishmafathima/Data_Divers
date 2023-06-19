<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipping;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class ShippingController extends Controller
{
    public function index(): View
    {
        $shipping = Shipping::all();
        return view ('logistics.index')->with('shipping', $shipping);
    }

    public function create(): View
    {
        return view('logistics.create');
    }

    public function edit(string $shp_id): View
    {
        $shipping = Shipping::find($shp_id);
        return view('logistics.edit')->with('shipping', $shipping);
    }

    public function update(Request $request, string $shp_id) : RedirectResponse
    {
        $shipping = Shipping::find($shp_id);
        $input = $request->all();
        $shipping->update($input);
        return redirect('logistics')->with('flash_message', 'Shipment Updated!');
    }

    public function destroy(string $shp_id): RedirectResponse
    {
        Shipping::destroy($shp_id);
        return redirect('logistics')->with('flash_message', 'Shipment deleted!');
    }
}
