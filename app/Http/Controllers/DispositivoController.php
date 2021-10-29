<?php

namespace App\Http\Controllers;

use App\Models\Dispositivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DispositivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dispositivos = Dispositivo::latest()->paginate();
        return view('dispositivos.index', compact('dispositivos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dispositivos.create', [
            'dispositivo' => new Dispositivo
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosDispositivo = request()->except('_token');
        $token = hash('sha256', $datosDispositivo['MAC'].$datosDispositivo['nombreDispositivo']);
        $datosDispositivo['token'] = substr($token, 48);
        Dispositivo::create($datosDispositivo);

        return redirect()->route('dispositivos.index');
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
    public function edit(Dispositivo $dispositivo)
    {
        return view('dispositivos.edit',[
            'dispositivo' => $dispositivo
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dispositivo $dispositivo)
    {
        $datosDispositivo = request()->except(['_token', '_method']);
        $token = hash('sha256', $datosDispositivo['MAC'].$datosDispositivo['nombreDispositivo']);
        $datosDispositivo['token'] = substr($token, 48);
        Dispositivo::where('id', '=', $dispositivo->id)->update($datosDispositivo);
        Dispositivo::findOrFail($dispositivo->id);
        return redirect()->route('dispositivos.edit', $dispositivo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dispositivo $dispositivo)
    {
        Dispositivo::destroy($dispositivo->id);
        return redirect()->route('dispositivos.index');
    }
}
