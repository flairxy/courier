<?php

namespace App\Http\Controllers\Admin;

use App\Models\Manager;
use App\Models\Office;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagerController extends Controller
{
    public function index()
    {
        $Managers = Manager::paginate(20);
        return view('admin.users.index', ['managers' => $Managers]);

    }

    public function create()
    {
        $offices = Office::all();
        return view('admin.users.create', ['offices'=>$offices]);

    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'office_id' => 'required',
            'email' => 'required|unique:managers',
            'password' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'address' => $request->address,
            'office_id' => $request->office_id,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ];

        Manager::create($data);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return back()->with([
            'success' => 'Manager created successfully'
        ]);
    }

    public function edit($id)
    {
        $offices = Office::all();
        $Manager = Manager::whereId($id)->first();
        return view('admin.users.edit', ['manager' => $Manager, 'offices'=>$offices]);
    }

    public function update(Request $request, $id)
    {
//        dd($request->all());
        $data = [
            'name' => $request->name,
            'address' => $request->address,
//            'office_id' => $request->office_id,
            'email' => $request->email,
            'phone' => $request->phone,
        ];

        $manager = Manager::whereId($id)->first();
        User::whereEmail($manager->email)->update([
            'email' => $data['email']
        ]);
        $manager->update($data);
        return back()->with([
            'success' => 'Manager updated successfully'
        ]);
    }

    public function destroy($id)
    {
        $manager = Manager::find($id);
        $user = User::whereEmail($manager->email)->first();
        $user->delete();
        $manager->delete();

        return back()->with([
            'success' => 'Manager deleted successfully'
        ]);
    }
}
