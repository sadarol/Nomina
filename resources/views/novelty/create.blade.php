@extends('layouts.main')
@section('title', 'Crear usuario')

@section('content')

<div class="content-wrapper">
    <div class="content-header row mb-1">
    </div>
    <div class="content-body">
        <!-- Card con el contenido  -->
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title ft-slack"> Crear Novedades</h4>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body pt-0">
                            @include('novelty.forms.noveltyForm')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ end card con el contenido -->
    </div>
</div>
@endsection