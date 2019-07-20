<?php

namespace App\Http\Controllers\Admin;

use App\Models\Shipment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ShipmentController extends Controller
{
    public function index()
    {
        $shipments = Shipment::paginate(20);
        return view('admin.shipment.index', ['shipments' => $shipments]);

    }

    public function create()
    {
        return view('admin.shipment.create');

    }


    public function store(Request $request)
    {

        $request->validate([
            'shipper_name' => 'required',
            'shipper_address' => 'required',
            'shipper_phone' => 'required',
            'receiver_name' => 'required',
            'booking_mode' => 'required',
            'receiver_address' => 'required',
            'receiver_phone' => 'required',
            'receiver_email' => 'required',
            'invoice_no' => 'required|unique:shipments',
            'consignment_no' => 'required|unique:shipments',
            'type' => 'required',
            'weight' => 'required',
            'total_freight' => 'required',
            'quantity' => 'required',
            'mode' => 'required',
            'departure_time' => 'required',
            'origin_sl' => 'required',
            'destination_sl' => 'required',
            'status' => 'required',
            'pickup_date' => 'required',
//            'comments' => 'max:255',
        ]);

//        if ($validate->fails()) {
//            return $validate->errors();
//        }

        Shipment::create([
            'shipper_name' => $request->shipper_name,
            'shipper_address' => $request->shipper_address,
            'shipper_phone' => $request->shipper_phone,
            'receiver_name' => $request->receiver_name,
            'receiver_address' => $request->receiver_address,
            'receiver_phone' => $request->receiver_phone,
            'receiver_email' => $request->receiver_email,
            'total_freight' => $request->total_freight,
            'consignment_no' => $request->consignment_no,
            'type' => $request->type,
            'weight' => $request->weight,
            'invoice_no' => $request->invoice_no,
            'quantity' => $request->quantity,
            'mode' => $request->mode,
            'booking_mode' => $request->booking_mode,
            'departure_time' => $request->departure_time,
            'origin_sl' => $request->origin_sl,
            'destination_sl' => $request->destination_sl,
            'current_sl' => $request->current_sl,
            'status' => $request->status,
            'pickup_date' => $request->pickup_date,
            'comments' => $request->comments,
        ]);

        return back()->with([
            'success' => 'Shipment created successfully'
        ]);
    }

    public function edit($id)
    {
        $shipment = Shipment::whereId($id)->first();
        return view('admin.shipment.edit', ['ship'=>$shipment]);
    }

    public function update(Request $request, $id)
    {
//        dd($request->all());

        $data = $request->except('_token','_method');
        Shipment::whereId($id)->update($data);
        return back()->with([
            'success' => 'Shipment updated successfully'
        ]);
    }

    public function destroy($id)
    {
        $shipment = Shipment::find($id);
        $shipment->delete();
        return back()->with([
            'success' => 'Shipment deleted successfully'
        ]);
    }
}
