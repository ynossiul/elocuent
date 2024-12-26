<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function search(Request $request)
    {
        
        $search = $request->input('search'); 

        
        $post = Cliente::where('Nombre', 'LIKE', '%' . $search . '%')
                         ->orWhere('ApellidoPaterno', 'LIKE', '%' . $search . '%')
                         ->orWhere('ApellidoMAterno', 'LIKE', '%' . $search . '%')
                         ->orWhere('Telefono', 'LIKE', '%' . $search . '%')
                         ->orWhere('Correo', 'LIKE', '%' . $search . '%')
                         ->orWhere('Status', 'LIKE', '%' . $search . '%')
                         ->get();

        
        return view('lista', compact('post'));
    }
}