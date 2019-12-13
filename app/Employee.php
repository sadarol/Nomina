<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable=[
        'documento',
        'nombresYapellidos',
        'telefono',
        'celular',
        'email',
        'direccion',
        'barrio',
        'departamento',
        
        'cargo',
        'salario',
        'eps',
        'arl',
        'cajaDeCompensaciones',
        'fondoDePensiones',
        'fechaIngreso',
        'fechaRetiro',
        
        'nombreContacto',
        'parentesco',
        'telefonoContacto',

    ];
}
