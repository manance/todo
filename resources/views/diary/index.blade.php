<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pabeigtie uzdevumi</title>
</head>
<body>
    <h1>Visi pabeigtie uzdevumi:</h1>
    <ul>
        @foreach ($last_todos as $last_todo)
            <li>{{$last_todo->title}}</li>
        @endforeach
    </ul>
</body>
</html>