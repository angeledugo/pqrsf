<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Solicitud;
use Storage;

class SolicitudController extends Controller
{
    //

    public function store(Request $request) {

        $uploadedFile = $request->file('file');
        $filename = time().$uploadedFile->getClientOriginalName();

        Storage::put(
            'files/'.$filename,
            file_get_contents($request->file('file')->getRealPath())
        );

        //Buscamos el email 
        $email = $request->email;
        $persona = Persona::firstOrCreate(['email' => $email], 
        ['nombres' => $request->nombres,
         'apellidos' => $request->apellidos,
         'tipo_identificacion' => $request->tipo_identificacion,
         'identificacion' => $request->identificacion,
         'telefono' => $request->telefono,
         'celular' => $request->celular,
         'pais' => $request->pais,
         'departamento' => $request->departamento,
         'ciudad' => $request->ciudad,
         'barrio' => $request->barrio,
         'direccion' => $request->direccion,
         'zip' => $request->zip
        ]);   

        // Creamos la nueva solicitud 

        $solicitud = new Solicitud;

        $solicitud->id_tipo = $request->tipo_solicitud;
        $solicitud->descripcion = $request->descripcion;
        $solicitud->file_path = $filename;
        $solicitud->tipo_repuesta = $request->respuesta;
        $solicitud->user_id  = $persona->id;

        $solicitud->save();

        return redirect()->route('register.index')->with('status', 'Solicitud creada! con el numero : '+ $solicitud->id);
    }


    public function show(Request $request) {

        
        $solicitud = Solicitud::find($request->codigo);

        return view('solicitud')->with(['solicitud' => $solicitud]);

    }
}
