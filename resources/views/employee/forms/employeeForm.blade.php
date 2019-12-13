<div class="container">
    <div class="col-md-12">
        <div class="card-content collapse show">
            <div class="form-body">

                <div class="row">

                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-2 col-xl-3">
                        <label for="complaintinput1">Documento</label>
                    <input type="number" class="form-control round" placeholder="Ingrese el documento" name="document" value="{{$employee->documento}}">
                        {!! $errors->first('document','<span style=color:red;">:message</span>') !!}
                    </div>

                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-2 col-xl-3">
                        <label for="complaintinput1">Nombres y Apellidos</label>
                        <input type="text" class="form-control round" placeholder="Ingrese el nombre" name="name" value="{{ $employee->nombresYapellidos }}">
                        {!! $errors->first('name','<span style=color:red;">:message</span>')!!}
                    </div>

                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                        <label for="complaintinput1">Telefono</label>
                        <input type="number" class="form-control round" placeholder="Ingrese el telefono" name="number" value="{{$employee->telefono}}">
                        {!! $errors->first('number','<span style=color:red;">:message</span>')!!}
                    </div>

                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                        <label for="complaintinput1">Celular</label>
                        <input type="number" class="form-control round" placeholder="Ingrese el celular" name="phone" value="{{$employee->celular}}">
                        {!! $errors->first('phone','<span style=color:red;">:message</span>')!!}
                    </div>

                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-2 col-xl-3">
                        <label for="complaintinput1">Email</label>
                        <input type="email" class="form-control round" placeholder="Ingrese el email" name="email" value="{{$employee->email}}">
                        {!! $errors->first('email','<span style=color:red;">:message</span>')!!}
                    </div>

                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-2 col-xl-3">
                        <label for="complaintinput1">Direccion</label>
                        <input type="text" class="form-control round" placeholder="Ingrese la direccion" name="address" value="{{$employee->direccion}}">
                        {!! $errors->first('address','<span style=color:red;">:message</span>')!!}
                    </div>

                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-2 col-xl-3">
                        <label for="complaintinput1">Barrio</label>
                        <input type="text" class="form-control round" placeholder="Ingrese el barrio" name="neighborhood" value="{{$employee->barrio}}">
                        {!! $errors->first('neighborhood','<span style=color:red;">:message</span>')!!}
                    </div>

                    <div class="form-group col-12 col-sm-12 col-md-12 col-lg-2 col-xl-3">
                        <label for="complaintinput1">Departamento</label>
                        <input type="text" class="form-control round" placeholder="Ingrese el barrio" name="departament" value="{{$employee->departamento}}">
                        {!! $errors->first('departament','<span style=color:red;">:message</span>')!!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
