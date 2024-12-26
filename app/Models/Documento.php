<?php

namespace App\Models;

use Illuminate\Cache\HasCacheLock;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Factories\HasFactory;

class Documento extends Model
{
    //aqui van la info de los documentos

    use HasCacheLock;

    protected $table='documentacion';

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);  // Assuming each Documento belongs to one Cliente
    }
}
