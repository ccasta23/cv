<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @isset($title)
        <h1>Bienvenidos a {{$title}}</h1>
    @else
        <h1>Bienvenidos igual 😁</h1>
    @endisset
    <p>Aquí aprenderemos sobre plantillas, ORM, y mucho pero mucho PHP</p>
    <p><strong>Descripción:</strong> {{$descripcion}}</p>
    <ul>
        @foreach( $temas as $tema )
            <li>{{$tema}}</li>
        @endforeach
    </ul>
    {{--Muy pero muy mala practica escribir PHP dentro de un template--}}
    <?php echo 'Estoy escribiendo PHP directo en la plantilla'; ?>
</body>
</html>
