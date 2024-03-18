
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compañia</title>
</head>

<body>
    <form action="{{route('Company.store')}}" method="POST">
        @csrf
        <input type="text" placeholder="ActivityPrincipal" name="ActivityPrincipal">
        <input type="text" placeholder="Activity" name="Activity">

        <button type="submit">Enviar</button>
    </form>
</body>

</html>
