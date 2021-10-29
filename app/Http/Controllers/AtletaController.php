<?php

namespace App\Http\Controllers;

use App\Models\Atleta;
use Illuminate\Http\Request;
use App\Http\Requests\SaveAtletaRequest;
use Illuminate\Support\Facades\Storage;

class AtletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atletas = Atleta::latest()->paginate();
        return view('atletas.index', compact('atletas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('atletas.create', [
            'atleta' => new Atleta
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
        $autorizado = $request->input('Autorizado') ? 'true' : 'false';

        $request->validate([
            'Nombre' => ['required', 'max:100'],
            'apellidoPaterno' => ['required', 'max:100'],
            'apellidoMaterno' => ['required', 'max:100'],
            'Correo' => 'nullable',
            'Foto' => ['image', 'mimes:jpeg,png,jpg', 'max:1014'],
            'RFID' => ['required', 'max:10'],
        ]);
        
        $datosAtleta = request()->except('_token');
        
        if($request->hasFile('Foto')){
            $datosAtleta['Foto'] = $request->file('Foto')->store('uploads', 'public');
            $datosAtleta['Autorizado'] = $autorizado;
            Atleta::create($datosAtleta);
            // return response()->json($datosAtleta);
            return redirect()->route('atletas.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Atleta  $atleta
     * @return \Illuminate\Http\Response
     */
    public function show(Atleta $atleta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atleta  $atleta
     * @return \Illuminate\Http\Response
     */
    public function edit(Atleta $atleta)
    {
        return view('atletas.edit', [
            'atleta' => $atleta
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Atleta  $atleta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atleta $atleta)
    {
        $autorizado = $request->input('Autorizado') ? 'true' : 'false';
        $datosAtleta = request()->except(['_token', '_method']);
        if($request->hasFile('Foto')){
            Atleta::findOrFail($atleta->id);
            Storage::delete('public/'.$atleta->Foto);
            $datosAtleta['Foto']=$request->file('Foto')->store('uploads', 'public');
        }
        $datosAtleta['Autorizado'] = $autorizado;
        Atleta::where('id','=',$atleta->id)->update($datosAtleta);
        Atleta::findOrFail($atleta->id);
        return redirect()->route('atletas.index', $atleta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atleta  $atleta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atleta $atleta)
    {
        Storage::delete('public/'.$atleta->Foto);
        Atleta::destroy($atleta->id);
        return redirect()->route('atletas.index');
    }
}
