<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            // cari berdasarkan nama
            // $cars = Car::where('name', 'LIKE' ,'%' .$request->search. '%')->paginate(5);
            
            // cari berdasarkan semua
            $searchTerm = $request->search;
            $cars = Car::where(function ($query) use ($searchTerm) {
                $query->where('name', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('model', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('no_plat', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('rate', 'LIKE', '%' . $searchTerm . '%');
            })->get();
        } else {
            $cars = Car::all();
        }

        return view('car.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cars = Car::all();
        return view('car.create', ['cars' => $cars]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'model' => 'required',
            'no_plat' => 'required',
            'rate' => 'required',
        ]);

        Car::Create([
            'name'            =>  $request->name,
            'model'           =>  $request->model,
            'no_plat'         =>  $request->no_plat,
            'rate'           =>  $request->rate,
        ]);

        return redirect()->route('sewa-mobil.index')->with('success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car , $id)
    {
        $cars =Car::find($id);
        return view('car.show', ['cars' => $cars]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
}
