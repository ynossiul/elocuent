<?php

use App\Http\Controllers\ClienteController;
use App\Models\Cliente;
use App\Models\Documento;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\search;

Route::get('/', function () {
    return view('welcome');
});

Route::get('lista',function(){
return view('lista');
});


Route::get('prueba',function(){
    $post=  new Cliente;
    $document=new Documento;
        // $post ->Nombre='Conchita Alonzo';
    // $post ->ApellidoPaterno='Ruiz';
    // $post ->ApellidoMaterno='Ruiz';
    // $post ->Telefono=9995985;
    // $post ->Correo='conchi@hotmail.com';
    // $post ->Status=0;
    // $post->save();
    $post=Cliente::all();
    $document=Documento::all();
 
    // $clientes = Cliente::with('documentos')->get();
    // return view('your_view', compact('clientes'));


    return view('lista', compact('post', 'document'));


});

Route::get('documentacion',function(){
    $post= new Documento;
    $post->Ine='';
    $post->Domicilio='18 x 89 20 mulsay';
    $post->Status="Incompleto";
    $post->save();
    return $post;

});


Route::get('find',function($nombre){
    $post =new Cliente();
    $post=Cliente::where('Nombre',$nombre);
});

Route::get('/clients/search', [ClienteController::class,'search'])->name('clients.search');
