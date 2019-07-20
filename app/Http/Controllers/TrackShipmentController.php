<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;
use Error;

class TrackShipmentController extends Controller
{

    public function index()
    {
        return view('track-shipment');
    }
    public function abort()
    {
        return back();
    }

    public function track(Request $request)
    {
//        dd($request->all());
        $data = $request->number;
        $shipment = Shipment::where('consignment_no', $request->number)->first();
        return view('track', ['shipment'=>$shipment, 'number'=>$data]);
//        return view('track');
    }
}
