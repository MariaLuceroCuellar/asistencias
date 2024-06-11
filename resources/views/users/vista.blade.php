<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
</head>
<body>
    <h1>Hola Usuario</h1>
    <!-- Mostraremos una lista de 10 usuarios -->
    @foreach ($usuarios as $usuario)
        <div>
            <h3>
                <!-- la flecha -> permite acceder a los datos -->
                {{$usuario->nombre}}
            </h3>
            <br>
            <p>
                {{$usuario->correo}}
            </p>
        </div>
        
    @endforeach
  
   
    
</body>
</html>

