<section id="pagination">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered alt-pagination">
                                <thead>
                                    <tr>
                                        {{-- <th>Id</th> --}}
                                        <th>Documento</th>
                                        <th>Nombres Y Apellidos</th>
                                        <th>Email</th>
                                        <th>Cargo</th>
                                        <th>Salario</th>
                                        <th>Eps</th>
                                        <th>Arl</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                   @foreach ($employees as $employee)
                                    
                                    <tr>
                                        {{-- <td>{{ $employee->id}}</td> --}}
                                        <td>
                                            <a href="{{route('employeeShow' , $employee->id )}}">
                                                {{ $employee->documento}}
                                            </a>
                                        </td>
                                        <td>{{ $employee->nombresYapellidos}}</td>
                                        <td>{{ $employee->email}}</td>
                                        <td>{{ $employee->cargo}}</td>
                                        <td>{{ $employee->salario}}</td>
                                        <td>{{ $employee->eps}}</td>
                                        <td>{{ $employee->arl}}</td>
                                        <td>
                                            <a href="{{route ('employeeEdit', $employee->id) }}">Editar</a>
                                            <form method="POST" action="{{route('employeeDelete' ,  $employee->id)}}">
                                                {!! method_field('DELETE') !!}
                                                @csrf
                                                <button type="submit">Eliminar</button>
                                            </form>
                                        </td>

                                    </tr>

                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        {{-- <th>Id</th> --}}
                                        <th>Documento</th>
                                        <th>Nombres Y Apellidos</th>
                                        <th>Email</th>
                                        <th>Cargo</th>
                                        <th>Salario</th>
                                        <th>Eps</th>
                                        <th>Arl</th>
                                        <th>Acciones</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
