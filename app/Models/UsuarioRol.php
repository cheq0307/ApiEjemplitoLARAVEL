<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class UsuarioRol extends Model
{
    protected $table = 'usuario_rol';

    protected $fillable = [
        'usuario_id',
        'rol_id'
    ];

    public $timestamps = false; #esto hace referencia a que esta tabla se creo a partir de demas tablas, es decir que a partir de una tabla que uso otra de muhcos a muchos
    
}