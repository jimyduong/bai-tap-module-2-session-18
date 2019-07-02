<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Customer;

class CustomersController extends Controller
{
    public function create(){
        $cities = City::all();
        return view('customers.create', compact('cities'));
    }
    public function store(Request $request){
        $customer = new Customer();
        $customer->name     = $request->input('name');
        $customer->dob      = $request->input('dob');
        $customer->email    = $request->input('email');
        $customer->city_id  = $request->input('city_id');
        $customer->save();

        return redirect()->route('customers.index');
    }
    public function edit($id){
        $customer = Customer::findOrFail($id);
        $cities = City::all();

        return view('customers.edit', compact('customer', 'cities'));
    }
    public function update(Request $request, $id){
        $customer = Customer::findOrFail($id);
        $customer->name     = $request->input('name');
        $customer->email    = $request->input('email');
        $customer->dob      = $request->input('dob');
        $customer->city_id  = $request->input('city_id');
        $customer->save();
        return redirect()->route('customers.index');
    }
    public function index(){
        $customers = Customer::paginate(2);
        $cities = City::all();
        return view('customer.list', compact('customers', 'cities'));
    }
    public function filterByCity(Request $request){
        $idCity = $request->input('city_id');
        $cityFilter = City::findOrFail($idCity);
        $customers = Customer::where('city_id', $cityFilter->id)->paginate();
        $totalCustomerFilter = count($customers);
        $cities = City::all();

        return view('customer.list', compact('customers', 'cities', 'totalCustomerFilter', 'cityFilter'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('customers.index');
        }
        $customers = Customer::where('name', 'LIKE', '%' . $keyword . '%')
            ->paginate(5);

        $cities = City::all();
        return view('customers.list', compact('customers', 'cities'));
    }
}
