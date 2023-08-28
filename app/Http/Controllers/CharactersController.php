<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CharactersModel;

class CharactersController extends Controller
{
    /**
     * Obtener todo los registros guardados.
     */
    public function index()
    {
       
        $characters = CharactersModel::all();
    
        $characterData = [];
        
        foreach ($characters as $character) {
            $characterData[] = [
                'id' => $character->id,
                'name' => $character->name,
                'status' => $character->status,
                'species' => $character->species,
                'type' => $character->type,
                'location' => $character->location,
                'image' => $character->image,
                'episode' => $character->episode,
                'created' => $character->created,
            ];
        }
        
        return response()->json($characterData);
    }

    

    /**
     * Crear un registro.
     */
    public function store(Request $request)
    {
        $requestData = $request->all(); 
        $character = new CharactersModel($requestData);
        $character->save();
        return response()->json(['mensaje' => 'Registro creado exitosamente.'], 201);
    }

    /**
     * Seleccionar un registro por parametro en este caso ID.
     */
    public function show(string $id)
    {
        $character = CharactersModel::find($id);
    if (!$character) {
        return response()->json(['mensaje' => 'Su busqueda no obtuvo resultados.'], 404);
    }
    return response()->json($character, 200);
    }

    /**
     * Actualizar un registro en especifico.
     */
    public function update(Request $request, string $id)
    {
        $character = CharactersModel::find($id);

        if (!$character) {
            return response()->json(['mensaje' => 'No hay registro para actualizar.'], 404);
        }
        $requestData = $request->all();
        $character->update($requestData);
    
        return response()->json(['mensaje' => 'Registro actualizado correctamente.'], 200);
    }

    /**
     * Borrar un registro.
     */
    public function destroy(string $id)
    {
        $character = CharactersModel::find($id);

        if (!$character) {
            return response()->json(['mensaje' => 'Rigistro no encontrado'], 404);
        }
    
        $character->delete();
    
        return response()->json(['mensaje' => 'Registro borrado exitosamente'], 200);
    }
}
