<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>
    <h1>Hola Usuario</h1>
    <!-- Mostraremos una lista de 10 usuarios -->
    @foreach ($users as $user)
        <div>
            <h3>
                <!-- la flecha -> permite acceder a los datos -->
                {{$user->name}}
            </h3>
            <br>
            <p>
                {{$user->email}}
            </p>
        </div>
        
    @endforeach
  
   
    
</body>
</html>

