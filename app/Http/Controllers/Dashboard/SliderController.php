<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        // Obtener el usuario autenticado
        $user = auth()->user();

        $site_web_id = $user->sites_web->id;

        $sliders = Slider::where('site_web_id', $site_web_id)->get(); // este pinche get o frish te puede otronar el eloquent, pd: si no pones nada, es una coleccion 

        // dd($sliders); // Esto mostrará los datos y detendrá la ejecución.

        return view('dashboard.sliders.sliders', ['sliders' => $sliders]);
    }

    // Show the form for creating a new resource.
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
