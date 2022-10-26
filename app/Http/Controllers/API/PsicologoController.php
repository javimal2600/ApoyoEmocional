<?php

namespace App\Http\Controllers\API;
use App\Models\Psicologo;
use App\Http\Resources\PsicologoResource;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;

use Validator;

class PsicologoController extends BaseController
{
    //
    public function index()
    {
        $psicologos = Psicologo::all();
        return $this->sendResponse(PsicologoResource::collection($psicologos), 'Psicologos show successfully.');
    }


    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nombre'=>'required',
            'apellido'=>'required',
            'fechanac'=>'required',
            'cedula'=>'required',
            'telefono'=>'required',
            'correo'=>'required',
        ]);

        //Valida los campos que obtenemos del Frontend
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $psicologo = Psicologo::create($request->all());

        $success['success'] = true;
        $success['data'] = new PsicologoResource($psicologo);
        return $this->sendResponse($success, 'psicologo register successfully.');
    }


    public function show($id)
    {
        $psicologo = Psicologo::find($id);
        if(isset($psicologo)){
            $success['success'] = true;
            $success['data'] = new PsicologoResource($psicologo);
            return $this->sendResponse($success, 'psicologo show successfully.');
        }else{
            return $this->sendError('Validation Error.','No se encontró el plan');
        }
    }


    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre'=>'required',
            'apellido'=>'required',
            'fechanac'=>'required',
            'cedula'=>'required',
            'telefono'=>'required',
            'correo'=>'required',
        ]);

        //Valida los campos que obtenemos del Frontend
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $psicologo = Psicologo::findOrFail($request->id);

        $psicologo->nombre = $request->nombre;
        $psicologo->apellido = $request->apellido;
        $psicologo->fechanac = $request->fechanac;
        $psicologo->cedula = $request->cedula;
        $psicologo->telefono = $request->telefono;
        $psicologo->correo = $request->correo;

        $psicologo->save();

        $success['success'] = true;
        $success['data'] = new PsicologoResource($psicologo);
        return $this->sendResponse($request->all(), 'Psicologo update successfully.');
    }


    public function destroy($id){
        $psicologo=Psicologo::destroy($id);
         $success['success'] = true;
         $success['data'] = new PsicologoResource($psicologo);
         return $this->sendResponse($success, 'psicologo destroy successfully.');
     }
}
