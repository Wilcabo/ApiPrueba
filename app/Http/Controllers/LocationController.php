<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\locationModel;

class LocationController extends Controller
{
    /**
     * Mostrar todo los registro.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations= locationModel::all();
    
        $locationData = [];
        
        foreach ($locations as $location) {
            $locationData[] = [
                'id' => $location->id,
                'name' => $location->name,
                'type' => $location->type,
                'dimension' =>$location->dimension,
                'residents' =>$location->location,
                'url' =>$location->url,
                'created' =>$location->created,
            ];
        }
        
        return response()->json($locationData);
    }

    /**
     * Guardar un registro.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all(); 
        $location = new locationModel($requestData);
        $location->save();
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
        $location = locationModel::find($id);
        if (!$location) {
            return response()->json(['mensaje' => 'Su busqueda no obtuvo resultados.'], 404);
        }
        return response()->json($location, 200);
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
        $location = locationModel::find($id);

        if (!$location) {
            return response()->json(['mensaje' => 'No hay registro para actualizar.'], 404);
        }
        $requestData = $request->all();
        $location>update($requestData);
    
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
        $location = locationModel::find($id);

        if (!$location) {
            return response()->json(['mensaje' => 'Rigistro no encontrado'], 404);
        }
    
        $location->delete();
    
        return response()->json(['mensaje' => 'Registro borrado exitosamente'], 200);
    }
}
