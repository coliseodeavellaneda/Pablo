<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mensaje recibido</title>
</head>
<body>

    <p><strong>Recibiste un mensaje de: </strong>{{ $msj['name'] }}</p>
    <p><strong>Email: </strong> {{ $msj['email'] }}</p>
    <p><strong>Asunto: </strong> {{ $msj['subject'] }}</p>
    <p><strong>Contenido: </strong> {{ $msj['content'] }}</p>

</body>
</html>