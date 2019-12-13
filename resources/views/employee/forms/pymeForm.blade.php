<div class="container">
        <div class="col-md-12">
            <div class="card-content collapse show">
                <div class="form-body">

                    <div class="row">
                        @auth
                        {{auth()->user()->name}}
                        @endauth
                        <div class="form-group col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                            <label for="complaintinput1">Cargo</label>
                            <input type="text" class="form-control round" placeholder="Ingrese el cargo" name="post" value="{{$employee->cargo}}">
                            {!! $errors->first('post','<span style=color:red;">:message</span>') !!}
                        </div>

                        <div class="form-group col-12 col-sm-12 col-md-12 col-lg-2 col-xl-3">
                            <label for="complaintinput1">Salario</label>
                            <input type="number" class="form-control round" placeholder="Ingrese el salario" name="salary" value="{{$employee->salario}}">
                            {!! $errors->first('salary','<span style=color:red;">:message</span>') !!}
                        </div>

                        <div class="form-group col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                            <label for="complaintinput1">EPS</label>
                            <input type="text" class="form-control round" placeholder="Ingrese la EPS" name="eps" value="{{$employee->eps}}">
                            {!! $errors->first('eps','<span style=color:red;">:message</span>') !!}
                        </div>

                        <div class="form-group col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                            <label for="complaintinput1">ARL</label>
                            <input type="text" class="form-control round" placeholder="Ingrese la ARL" name="arl" value="{{$employee->arl}}">
                            {!! $errors->first('arl','<span style=color:red;">:message</span>') !!}
                        </div>

                        <div class="form-group col-12 col-sm-12 col-md-12 col-lg-2 col-xl-3">
                            <label for="complaintinput1">Caja de compensación</label>
                            <input type="text" class="form-control round" placeholder="Ingrese la caja de compensacion" name="box" value="{{$employee->cajaDeCompensaciones}}">
                            {!! $errors->first('box','<span style=color:red;">:message</span>') !!}
                        </div>

                        <div class="form-group col-12 col-sm-12 col-md-12 col-lg-2 col-xl-3">
                            <label for="complaintinput1">Fondo de pensiones</label>
                            <input type="text" class="form-control round" placeholder="Ingrese el fondo de pensiones" name="heart" value="{{$employee->fondoDePensiones}}">
                            {!! $errors->first('heart','<span style=color:red;">:message</span>') !!}
                        </div>

                        <div class="form-group col-12 col-sm-12 col-md-12 col-lg-2 col-xl-3">
                            <label for="complaintinput1">Fecha Ingreso</label>
                            <input type="date" class="form-control round" placeholder="Ingrese la fecha ingreso" name="datebegin" value="{{$employee->fechaIngreso}}">
                            {!! $errors->first('datebegin','<span style=color:red;">:message</span>') !!}
                        </div>

                        <div class="form-group col-12 col-sm-12 col-md-12 col-lg-2 col-xl-3">
                            <label for="complaintinput1">Fecha Retiro</label>
                            <input type="date" class="form-control round" placeholder="Ingrese la fecha de retiro" name="dateretirement" value="{{$employee->fechaRetiro}}">
                            {!! $errors->first('dateretirement','<span style=color:red;">:message</span>') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
