<!DOCTYPE html>
<html>
<head>
    <title>benjaminperez.cl</title>
</head>
<body>
    <h1>Nuevo contacto desde formulario web</h1>
    <p>Nombre: {{ $details->nombre }}</p>
    <p>Correo: {{ $details->email }}</p>
    <p>Telefono: {{ $details->telefono }}</p>
    <p>Mensaje: {{ $details->mensaje }}</p>
    <p>Created at: {{ $details->created_at }}</p>
    <p>www.benjaminperez.cl</p>
</body>
</html>