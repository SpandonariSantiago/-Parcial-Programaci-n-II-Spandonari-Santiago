<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPERMERCADO</title>
</head>
<body>
    <h1>SUPERMERCADO</h1><hr>
    <h2>Usted se encuentra en la pagina de inicio</h2><hr>
    

    @if(session('Login'))

        <form action="/" method="post">@csrf

            <label>Bienvenido: </label>
                <input type="text" name="NombreUsuario" id="NombreUsuario" value="{{ session('Autor') }}" readonly><br /><br />

            <label>Para cerrar sesion presione aqui: </label>
                <input type="submit" value="Cerrar Sesión">

        </form>

        <hr><label>Productos: </label>
            <a href='/'><input type="button" value="Agregar"></a><hr>
            <a href='/'><input type="button" value="Eliminar"></a><hr>

        @isset($Productos)
            @foreach($Productos as $Producto)

                <b>ID: </b> {{ $Producto -> Id }} <br />
                <b>&nbsp;&nbsp;Nombre: </b> {{ $Producto -> Nombre }}<br />
                <b>&nbsp;&nbsp;Marca: </b>{{ $Producto -> Marca }}<br />
                <b>&nbsp;&nbsp;Descripcion: </b> {{ $Producto -> Descripcion }}<br />
                <b>&nbsp;&nbsp;Stock: </b> {{ $Producto -> Stock }}<hr>

            @endforeach
        @endif

    @else    

        <label>Para iniciar sesion presione aqui: </label>
            <a href='/Login'><input type="button" value="Iniciar sesion"></a><hr>
        <label>Para registrarse presione aqui: </label>
            <a href='/Registro'><input type="button" value="Registrarse"></a><hr>

    @endif

</body>
</html>