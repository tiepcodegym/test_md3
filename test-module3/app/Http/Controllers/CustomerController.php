<?php

namespace App\Http\Controllers;

use App\Http\Requests\createRequest;
use App\Http\Requests\updateRequest;
use App\Models\Customer;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $customers = Customer::all();
        return view('customer.list', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(createRequest $request)
    {
        $customer = new Customer();
        $customer->id = $request->id;
        $customer->role = $request->role;
        $customer->name = $request->name;
        $customer->birthday = $request->birthday;
        $customer->sex = $request->sex;
        $customer->phone = $request->phone;
        $customer->idCard = $request->idCard;
        $customer->email = $request->email;
        $customer->address = $request->address;

        $customer->save();
        return redirect()->route('index')->with('success', "Đã thêm thành công");
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.edit', compact('customer'));
    }

    public function update(updateRequest $request)
    {
        $customer = Customer::findOrFail($request->id);
        $customer->role = $request->role;
        $customer->name = $request->name;
        $customer->birthday = $request->birthday;
        $customer->sex = $request->sex;
        $customer->phone = $request->phone;
        $customer->idCard = $request->idCard;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->save();
        return redirect()->route('index')->with('success', "Đã cập nhật thành công");
    }

    public function destroy($id)
    {
//        Customer::destroy($id);
//        return redirect()->route('index')->with('success', "Đã xóa thành công");

        $customer = Customer::findOrFail($id);
        $customer->delete();
        return response()->json(["success"=>true]);

    }

    public function search(Request $request)
    {
        try {
            $key = $request->key;
            $customers = Customer::where("name", 'like', '%'. $key. '%')->get();
            return view('customer.list', compact('customers'));
        } catch (ModelNotFoundException $exception){
            return back()->withErrors($exception->getMessage())->withInput();
        }
    }
}
