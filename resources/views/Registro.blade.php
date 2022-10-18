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
    <h2>Usted se encuentra en el formulario de registro</h2>
    <h3>Complete los campos con sus datos para crear su cuenta</h3><hr>
    
    <br /> 
    <form action="/Registro" method="post">@csrf
        
        <label for="usuario">Nombre de Usuario: </label>
            <input type="text" name="usuario" id="usuario"><br /><br />

        <label for="email">Email: </label>
            <input type="email" name="email" id="email"><br /><br />

        <label for="password">Contraseña: </label>
            <input type="password" name="password" id="password"><br /><br />

        <input type="submit" value="Crear Usuario">
        <input type="reset" value="Vaciar">

    </form>
    <br /><hr>

    <a href='/'><input type="button" value="Volver"></a>

    
    @isset($Error)

        @if($Error)
            <br /><hr>
            <div style="color: red;">Error al crear el usuario</div>
        @else
            <br /><hr>
            <div style="color: green;">Usuario creado correctamente</div>
        @endif

    @endisset

</body>
</html>