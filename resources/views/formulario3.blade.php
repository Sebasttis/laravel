<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<h1>Formulario</h1>

<form action="{{route('product3.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Ingrese el nombre del empleado:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Ingrese la cedula del empleado: 
    <br>
    <input type="number" name="identification">
    <br>
<label>
    Ingrese el tipo de contrato del empleado: 
    <br>
    <input type="text" name="contrate">
</label>
<br>
<label>
    Ingrese numero de celular del emplado: 
    <br>
    <input type="number" name="num">
</label>

<br><br>

<button type="submit">Enviar:</button>
</form>

</body>
</html>