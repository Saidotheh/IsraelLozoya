<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#F9D7A2;">
<h1>Crear un usuario</h1>
<br>

<form action="{{route('valida')}}" method="POST">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="inuser" class="form-label">Usuario</label>
            <input type="text" class="form-control" name="inuser" id="inuser" >
        </div>
        <br>
        <div class="mb-3">
            <label for="inpass" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="inpass" id="inpass">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> 
</body>
</html>
