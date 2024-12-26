<?php

namespace App\Models;

use Illuminate\Cache\HasCacheLock;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    //
    use HasCacheLock;

    protected $table='cliente';

    public function documentos()
{
    return $this->hasMany(Documento::class);  // Assuming a "Cliente" has many "Documento"
}
}


