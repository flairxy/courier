<?php

namespace App\Http\Controllers\Admin;

use App\Models\Office;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfficeController extends Controller
{
    public function index()
    {
        $offices = Office::paginate(20);
        return view('admin.office.index', ['offices' => $offices]);

    }

    public function create()
    {
        return view('admin.office.create');

    }


    public function store(Request $request)
    {
//        dd($request->all());

        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'timing' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'contact_person' => 'required'
        ]);

        Office::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'timing' => $request->timing,
            'contact_person' => $request->contact_person,
            'city' => $request->city,
        ]);

        return back()->with([
            'success' => 'Office created successfully'
        ]);
    }

    public function edit($id)
    {
        $office = Office::whereId($id)->first();
        return view('admin.office.edit', ['office'=>$office]);
    }

    public function update(Request $request, $id)
    {
//        dd($request->all());
        Office::whereId($id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'timing' => $request->timing,
            'phone' => $request->phone,
            'contact_person' => $request->contact_person,
            'city' => $request->city,
        ]);
        return back()->with([
            'success' => 'Office updated successfully'
        ]);
    }

    public function destroy($id)
    {
//        dd($id);
        $office = Office::find($id);
        $office->delete();
        return back()->with([
            'success' => 'Office deleted successfully'
        ]);
    }
}
