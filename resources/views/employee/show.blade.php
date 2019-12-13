@extends('layouts.main')
@section('title', 'Detalle Empleado')

@section('content')

<h1>Detallado empleados</h1>

{{-- <p>Documento {{ $employees->documento}}</p>
<p>Nombres y apellidos {{ $employees->NombresYapellidos}}</p>
<p>Telefono {{ $employees->telefono}}</p>
<p>Celular {{ $employees->celular}}</p>
<p>Email {{ $employees->email}}</p>
<p>Direccion {{ $employees->direccion}}</p>
<p>Barrio {{ $employees->barrio}}</p>
<p>Departamento {{ $employees->departamento}}</p>
<p>Cargo {{ $employees->cargo}}</p>
<p>Salario {{ $employees->salario}}</p>
<p>eps {{ $employees->eps}}</p>
<p>Arl {{ $employees->arl}}</p>
<p>Caja de compensacion {{ $employees->cajaDeCompensaciones}}</p>
<p>Fondo de pensiones {{ $employees->fondoDePensiones}}</p>
<p>Fecha Ingreso {{ $employees->fechaIngreso}}</p>
<p>Fecha Retiro {{ $employees->fechaRetiro}}</p>
<p>Nombre contacto {{ $employees->nombreContacto}}</p>
<p>Parentesco {{ $employees->parentesco}}</p>
<p>Numero contacto {{ $employees->telefonoContacto}}</p> --}}

<p>Documento {{ $employee->documento}}</p>
<p>Nombres y apellidos {{ $employee->NombresYapellidos}}</p>
<p>Telefono {{ $employee->telefono}}</p>
<p>Celular {{ $employee->celular}}</p>
<p>Email {{ $employee->email}}</p>
<p>Direccion {{ $employee->direccion}}</p>
<p>Barrio {{ $employee->barrio}}</p>
<p>Departamento {{ $employee->departamento}}</p>
<p>Cargo {{ $employee->cargo}}</p>
<p>Salario {{ $employee->salario}}</p>
<p>eps {{ $employee->eps}}</p>
<p>Arl {{ $employee->arl}}</p>
<p>Caja de compensacion {{ $employee->cajaDeCompensaciones}}</p>
<p>Fondo de pensiones {{ $employee->fondoDePensiones}}</p>
<p>Fecha Ingreso {{ $employee->fechaIngreso}}</p>
<p>Fecha Retiro {{ $employee->fechaRetiro}}</p>
<p>Nombre contacto {{ $employee->nombreContacto}}</p>
<p>Parentesco {{ $employee->parentesco}}</p>
<p>Numero contacto {{ $employee->telefonoContacto}}</p>






@endsection