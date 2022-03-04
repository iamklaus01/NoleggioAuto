<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

define('CAR_VIEW' , 'admin.cars.car-list');

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view(CAR_VIEW)->with('cars' , $cars);
    }

    /*  Display the list of cars which are mark as rented */
    public function carRented()
    {
        $carsRented = Car::where('available' , 0)->get();
        return view('admin.cars.car-rented')->with('rentedCar' ,$carsRented);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cars.add-car');
    }

    /* */
    public function makeAvailable($id)
    {
        $car = Car::findOrFail($id);
        $car->update([
            'available' => 1,
        ]);
        return view('admin.cars.car-rented')->with('rentedCar' , Car::where('available' , 0)->get())
            ->with('message' , "La voiture ". $car->brand.' '.$car->model." est à nouveau disponible");
    } 


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = null;
        if($request->hasFile('carImage') && !empty($request->file('carImage')))
        {
            $fileName = explode('.' , $request->file('carImage')->getClientOriginalName());
            $path = $request->file('carImage')->storeAs('resources' , $fileName[0].time().'.'.$fileName[1] , 'public');
            if($path == null)
            {
                return response()->noContent(Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
        Car::create([
            'brand' => $request->brand,
            'model' => $request->model,
            'price' => $request->price,
            'mode' => $request->mode,
            'description' => $request->description,
            'image_path' =>$path,
            'available' => 1,
        ]);
        $cars = Car::all();
        return view(CAR_VIEW)->with('cars' , $cars)
                ->with('message' , 'Une nouvelle voiture ajoutée au parc');
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
        $car = Car::findOrFail($id);
        return view('admin.cars.edit-car')->with('car' , $car);
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
        $path=null;
        $car_to_update = Car::findOrFail($id);
        if($request->hasFile('carImage') && !empty($request->file('carImage')))
        {
            $pathToUnlink = Car::where('image_path' , $car_to_update->image_path)->first();
            if(!Storage::disk('public')->delete($pathToUnlink->image_path))
            {
                return response()->json(['error' => 'File dissociation failed'] , 500);
            }
            $fileName = explode('.' , $request->file('carImage')->getClientOriginalName());
            $path = $request->file('carImage')->storeAs('resources' , $fileName[0].time().'.'.$fileName[1] , 'public');
            if($path == null)
            {
                return response()->noContent(Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        }else{
            $path = $car_to_update->image_path;
        }
        $car_to_update->update([
            'brand' => $request->brand,
            'model' => $request->model,
            'price' => $request->price,
            'mode' => $request->mode,
            'description' => $request->description,
            'image_path' => $path,
            'available' => 1,
        ]);
        $cars = Car::all();
        return view(CAR_VIEW)->with('cars' , $cars)
                ->with('message' , 'Une voiture a été mise à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car_to_delete = Car::findOrFail($id);
        if(!Storage::disk('public')->delete($car_to_delete->image_path))
        {
            return response()->json(['error' => 'File deleting failed'] , 500);
        }
        if (!$car_to_delete->delete()) {
            return response()->noContent(Response::HTTP_BAD_REQUEST);
        }
        $cars = Car::all();
        return view(CAR_VIEW)->with('cars' , $cars)
                ->with('message' , 'Une voiture a été retirée avec succès');
    }
}
