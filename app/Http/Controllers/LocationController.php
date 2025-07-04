<?php

use App\Models\Location;

class LocationController extends Controller
{
    // Para mostrar el mapa
public function index()
{
    $locations = \App\Models\Location::all();
    return view('map', compact('locations'));
}

// Para guardar nueva ubicación
public function store(Request $request)
{
    if (auth()->user()->role !== 'admin') {
        return redirect()->back()->with('error', 'No tienes permiso para guardar ubicaciones.');
    }

    $request->validate([
        'name' => 'required|string',
        'description' => 'nullable|string',
        'latitude' => 'required|numeric',
        'longitude' => 'required|numeric',
    ]);

    \App\Models\Location::create($request->all());
    return redirect()->back()->with('success', 'Ubicación guardada con éxito.');
}

}
