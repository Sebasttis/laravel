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

<form action="{{route('product2.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Ingrese el nombre del cliente:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Ingrese la cedula del cliente: 
    <br>
    <input type="number" name="identification">
    <br>
<label>
    Ingrese el correo del cliente: 
    <br>
    <input type="text" name="mail">
</label>
<br>
<label>
    Ingrese la edad del cliente: 
    <br>
    <input type="number" name="age">
</label>

<br><br>

<button type="submit">Enviar:</button>
</form>

</body>
</html>