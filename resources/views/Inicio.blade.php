<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLI UOVA</title>
</head>
<body>
    <h1>SUPERMERCADO "GLI UOVA"</h1><hr>
    <h2>Usted se encuentra en la pagina de inicio</hS<hr>
    

    @if(Auth::user())
        <h3>Aqui puede agregar, eliminar o simplemente visualizar los productos que ofrecemos</h3><hr>

        <form action="/" method="post">@csrf

            <label>Bienvenido: </label>
                <input type="text" name="NombreUsuario" id="NombreUsuario" value="{{ Auth::user()->name }}" readonly><br /><br />

            <label>Para cerrar sesion presione aqui: </label>
                <input type="submit" value="Cerrar Sesión">

        </form>

        <hr><label>Productos: </label>
            <a href='/AltaProducto'><input type="button" value="Agregar"></a><hr>

        @isset($Productos)
            @foreach($Productos as $Producto)

            <form action="/BajaProducto" method="get">@csrf

                <b>ID: </b> <input type="number" name="id" id="id" value="{{ $Producto -> id }}" readonly> <br />
                <b>&nbsp;&nbsp;Nombre: </b> {{ $Producto -> Nombre }}<br />
                <b>&nbsp;&nbsp;Marca: </b>{{ $Producto -> Marca }}<br />
                <b>&nbsp;&nbsp;Descripcion: </b> {{ $Producto -> Descripcion }}<br />
                <b>&nbsp;&nbsp;Stock: </b> {{ $Producto -> Stock }}

                <input type="submit" value="Eliminar"><hr>

            </form>

            @endforeach
        @endisset

    @else    

        <h3>Aqui puede iniciar sesion. En caso de no tener cuenta puede crear una</h3><hr>

        <label>Para iniciar sesion presione aqui: </label>
            <a href='/Login'><input type="button" value="Iniciar sesion"></a><hr>
        <label>Para registrarse presione aqui: </label>
            <a href='/Registro'><input type="button" value="Registrarse"></a><hr>

    @endif

</body>
</html>