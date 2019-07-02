<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    public function index()
    {
        $city = City::all();
        return view('city/list', compact('city'));
    }

    public function create()
    {
        return view('city/create');
    }

    public function store(Request $request)
    {
        $city = new City();
        $city->name = $request->name;
        $city->save();
        return redirect()->route('cities.index');
    }

    public function edit($id)
    {
        $city = City::findOrFail($id);
        return view('city/edit', compact('city'));
    }

    public function update(Request $request,$id)
    {
        $city = City::findOrFail($id);
        $city->name=$request->name;
        $city->save();
        return redirect()->route('cities.index');
    }
    public function destroy($id){
        City::destroy($id);
        return redirect()->route('cities.index');
    }
}
