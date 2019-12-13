@extends('layouts.main')
@section('title', 'Crear Empleado')

@section('content')
<form method="POST" action="{{route('employeeStore')}}">
    {{-- <input type="hidden" name="token" value=" {{csrf_field()}}"> --}}
    {{@csrf_field()}}
    {{-- @csrf --}}


    <div class="content-wrapper">
        <div class="content-header row mb-1">
        </div>
        <div class="content-body">
            <!-- Card con el contenido  -->
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title ft-user-plus"> Crear Empleados</h4>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body pt-0">
                                @include('employee.forms.employeeForm')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title ft-user-plus"> Datos Empresa</h4>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body pt-0">
                                @include('employee.forms.pymeForm')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title ft-user-plus"> Datos Contacto</h4>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body pt-0">
                                @include('employee.forms.contactForm')
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="form-actions text-right">

                <button type="submit" class="btn btn-success">
                    <i class="la la-check-square-o"></i> Guardar
                </button>
            </div>
        </div>
    </div>
</form>

@endsection
