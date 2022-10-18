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
    <h2>Usted se encuentra en el formulario de eliminar productos</h2>
    <h3>Aqui visualizara los valores del producto y escogera si eliminarlo o no</h3><hr>
    
    @isset($Producto)
        <form action="/BajaProducto" method="post">@csrf

            <b>ID: </b> <input type="number" name="id" id="id" value="{{ $Producto -> id }}" readonly> <br />
            <b>&nbsp;&nbsp;Nombre: </b> {{ $Producto -> Nombre }}<br />
            <b>&nbsp;&nbsp;Marca: </b>{{ $Producto -> Marca }}<br />
            <b>&nbsp;&nbsp;Descripcion: </b> {{ $Producto -> Descripcion }}<br />
            <b>&nbsp;&nbsp;Stock: </b> {{ $Producto -> Stock }}<hr>

            <input type="submit" value="Eliminar">
            <a href='/'><input type="button" value="Cancelar"></a><br />

        </form>
    @endisset

</body>
</html>