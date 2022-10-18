<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLI UOVA</title>
</head>
<body>
    <h1>SUPERMERCADO "GLI UOVA"</h1><hr>
    <h2>Usted se encuentra en el formulario de login</h2>
    <h3>Complete los campos con sus datos para iniciar sesion</h3><hr>
    
    <br />
    <form action="/Login" method="post">@csrf
        
        <label for="name">Nombre de Usuario: </label>
            <input type="text" name="name" id="name"><br /><br />

        <label for="password">Contraseña: </label>
            <input type="password" name="password" id="password"><br /><br />

        <input type="submit" value="Iniciar Sesión">

    </form>
    <hr>

    <a href="/Registro"><input type="button" value="Crear usuario"></a>

    <br /><hr>

    <a href='/'><input type="button" value="Volver"></a>

    @isset($ErrorAutenticacion)
        <br /><hr>
        <div style="color: red;">Error al iniciar sesion</div>
    @endisset

</body>
</html>