<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function contacto(Request $request)
    {
    	$request->validate([
    		'nombre' => 'required|string',
    		'apellido'=>'required|string',
    		'email'=>'required|email',
            'asunto'=>'required|string',
    		'message'=>'required|string|min:10'
    	],
    	[
    		'nombre.required'=>'El campo nombre es obligatorio',            
    		'apellido.required'=>'El campo apellido es obligatorio',
    		'email.required'=>'El campo email es obligatorio',
    		'email.email'=>'El campo debe ser un email valido',
            'asunto.required'=>'El campo asunto es obligatorio',            
    		'message.required'=>'El campo comentario es obligatorio',
    		'message.min'=>'Debe escribir mas de 8 caracteres'
    	]);

        $datos = array(
            'nombre'=>$request->input('nombre'),
            'apellido'=>$request->input('apellido'),
            'email'=>$request->input('email'),
            'asunto'=>$request->input('asunto'),
            'message'=>$request->input('message'),
        );

        $destino = "ales.escobar@hotmail.com";

        $contenido = "\n Nombre: " . $datos['nombre'] . " " . $datos['apellido'] . "\n Mensaje: " . $datos['message'] . "\n Email " . $datos['email'];

        $send=false;

        //$send = mail($destino, $datos['asunto'], $contenido);

        if($send){
            return back()->with('success','Mensaje Enviado.. En breve estaremos en contacto');
        }else{
            return back()->with('unsuccessful','Mensaje no Enviado.. Intentelo mas tarde o comuniquese por via teléfonica');
        }
    }
}
