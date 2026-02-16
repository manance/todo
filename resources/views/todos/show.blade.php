<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheetn" href="style.css">
    <title>Document</title>
</head>

<body>
    <h1>{{ $todo->content }}</h1>
    <p>Izpildīs: {{ $todo->completed ? "Jā" : "Nē" }}</p>
</body>

</html>