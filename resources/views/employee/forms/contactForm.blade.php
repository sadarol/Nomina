<div class="container">
        <div class="col-md-12">
            <div class="card-content collapse show">
                <div class="form-body">

                    <div class="row">

                        <div class="form-group col-12 col-sm-12 col-md-12 col-lg-2 col-xl-3">
                            <label for="complaintinput1">Nombres y Apellidos</label>
                            <input type="text" class="form-control round" placeholder="Ingrese nombres y apellidos" name="namecontact" value="{{$employee->nombreContacto}}">
                            {!! $errors->first('namecontact','<span style=color:red;">:message</span>') !!}
                        </div>

                        <div class="form-group col-12 col-sm-12 col-md-12 col-lg-2 col-xl-3">
                            <label for="complaintinput1">Parentesco</label>
                            <input type="text" class="form-control round" placeholder="Ingrese el Parentesco" name="relationship" value="{{$employee->parentesco}}">
                            {!! $errors->first('relationship','<span style=color:red;">:message</span>') !!}
                        </div>

                        <div class="form-group col-12 col-sm-12 col-md-12 col-lg-2 col-xl-3">
                            <label for="complaintinput1">Telefono</label>
                            <input type="number" class="form-control round" placeholder="Ingrese el telefono" name="numbercontact" value="{{$employee->telefonoContacto}}">
                            {!! $errors->first('numbercontact','<span style=color:red;">:message</span>') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
