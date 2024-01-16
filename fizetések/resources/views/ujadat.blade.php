<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route ('ujadatfelvitel') }}" method="post">
        {!! csrf_field() !!}
        <p>Adja meg a kiveheto szabadságainak számát</p>
        <input type = "number" name="kiveheto">
        <br>
        <p>Adja meg a kivett szabadságainak számát</p>
        <input type = "number" name="kivett">
        <br>
        <button type= "submit" name="felvesz" value="felvesz">Felvesz</button>
    </form>
</body>
</html>