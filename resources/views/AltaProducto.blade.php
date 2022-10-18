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
    <h2>Usted se encuentra en el formulario de agregar productos</h2>
    <h3>Complete los campos con los datos del producto a agregar</h3><hr>
    
    <br /> 
    <form action="/AltaProducto" method="post">@csrf

        <label for="nombre">Nombre: </label><br />
            <input type="text" name="nombre" id="nombre"><br /><br />

        <label for="marca">Marca: </label><br />
            <input type="text" name="marca" id="marca"><br /><br />

        <label for="descripcion">Descripcion: </label><br />
            <textarea name="descripcion" id="descripcion" maxlength="255" rows="5" cols="100" placeholder="Ingrese la descripcion del producto"></textarea><br /><br />

        <label for="stock">Stock: </label><br />
            <input type="number" name="stock" id="stock"><br /><br />

        <input type="submit" value="Publicar">
        <input type="reset" value="Vaciar">

    </form>
    <hr>

    <a href='/'><input type="button" value="Volver"></a><br />

    @isset($ErrorAutenticacion)
        <br /><hr>
        <div style="color: red;">Error al agregar el producto</div>
    @endisset

</body>
</html>