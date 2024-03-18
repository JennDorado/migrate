<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuerpo</title>
</head>

<body>
    <form action="{{route('Body.store')}}" method="POST">
        @csrf
        <input type="text" placeholder="categoria" name="categoria">
        <input type="text" placeholder="denominacion" name="denominacion">
        <button type="submit">Enviar</button>

    </form>
</body>

</html>
