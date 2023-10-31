<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Site_Web;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebSiteController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        // Obtener el usuario autenticado
        $user = auth()->user();

        $site_web_id = $user->sites_web->id;
        $sliders = Slider::where('site_web_id', $site_web_id)->get();

        return view('layouts.website', ['sliders' => $sliders]);
    }

    // Show the form for creating a new resource.
    public function create()
    {
        //
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'dominio' => 'required',
            'activo' => 'required'
        ]);


        Site_Web::create([
            'user_id' => auth()->user()->id,
            'dominio' => $request->dominio,
            'activo' =>  $request->activo
        ]);

        return redirect()->route('dashboard.index');
    }

    // Display the specified resource.
    public function show(string $id)
    {
        //
    }

    // Show the form for editing the specified resource.+
    public function edit(string $id)
    {
        //
    }

    // Update the specified resource in storage.
    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:sites_web,id',
            'dominio' => 'required',
            'activo' => 'required',
        ]);

        $site_web = Site_Web::findOrFail($request->id);

        $site_web->dominio = $request->dominio;
        $site_web->activo = $request->activo;
        $site_web->save();

        return redirect()->route('dashboard.index');
    }

    // Remove the specified resource from storage.
    public function destroy(string $id)
    {
        //
    }
}
