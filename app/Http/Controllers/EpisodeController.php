<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EpisodesModel;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $episodes = EpisodesModel::all();
    
        $episodesData = [];
        
        foreach ($episodes as $episode) {
            $episodesData[] = [
                'id' => $episode->id,
                'name' => $episode->name,
                'air_date' => $episode->air_date,
                'episode' => $episode->episode,
                'characters' => $episode->characters,
                'url' => $episode->url,
                'created' => $episode->created,
            ];
        }
        
        return response()->json($episodesData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all(); 
        $episode = new EpisodesModel($requestData);
        $episode->save();
        return response()->json(['mensaje' => 'Registro creado exitosamente.'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $episode = EpisodesModel::find($id);
        if (!$episode) {
            return response()->json(['mensaje' => 'Su busqueda no obtuvo resultados.'], 404);
        }
        return response()->json($episode, 200);
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
        $episode= EpisodesModel::find($id);

        if (!$episode) {
            return response()->json(['mensaje' => 'No hay registro para actualizar.'], 404);
        }
        $requestData = $request->all();
        $episode->update($requestData);
    
        return response()->json(['mensaje' => 'Registro actualizado correctamente.'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $episode = EpisodesModel::find($id);

        if (!$episode) {
            return response()->json(['mensaje' => 'Rigistro no encontrado'], 404);
        }
    
        $episode->delete();
    
        return response()->json(['mensaje' => 'Registro borrado exitosamente'], 200);
    }
}
