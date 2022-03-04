<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\RegisterOfRental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentalRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rental_list = RegisterOfRental::all();
        return view('admin.recettes')->with('records' , $rental_list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $car = Car::findOrFail($id);
        return view('auth.rent-form')->with('car' , $car);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        RegisterOfRental::create([
            'locationDate' => $request->rentDay,
            'returnDate' => $request->returnDay,
            'card_id' => $request->idCard,
            'nHours' => $request->nbreH,
            'car_id' => $request->id,
            'user_id' => Auth::user()->id,
        ]);
        Car::where('id' , $request->id)->update(['available' => 0]);
        $car = Car::find($request->id);
        return view('auth.rent-form')->with('car' ,$car)
        ->with('message' , 'OK');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
