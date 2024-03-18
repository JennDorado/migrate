<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Servicio</title>
</head>

<body>
    <form action="{{route('Services.store')}}" method="POST">
        @csrf
        <input type="text" placeholder="CodigoService" name="CodigoService">
        <input type="text" placeholder="Activity" name="Activity">

        <button type="submit">Enviar</button>
    </form>
</body>

</html>
