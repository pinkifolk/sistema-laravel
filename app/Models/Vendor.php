<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = ['rut','razonSocial','direccion','telefono','ciudad','comuna','contacto','email','celular'];
    use HasFactory;
}
