<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <form action="{{route ('guardando')}}" method="POST">
        {{-- <input type="hidden" name="token" value=" {{ csrf_token() }}">
    --}}
@csrf|                 

        <div class="form-group col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
            <label for="complaintinput1">Documento</label>
            <input type="number" class="form-control round" placeholder="Ingrese el documento" name="document">
            {!! $errors->first('document','<span style=color:red;">:message</span>')!!}
        </div>



        <div class="form-actions text-right">
            <button type="submit" class="btn btn-success">
                <i class="la la-check-square-o"></i> Guardar
            </button>
        </div>
    </form>
</head>

<body>

</body>

</html>
