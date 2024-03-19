<!doctype html>
<html lang="en">
    <head>
        <title>Vacations</title>
    </head>
    <body>
        <h1>Vacations</h1>
        <ul>
            @foreach ($vacations as $vacation)
            <li>{{ $vacation }}</li>
            @endforeach
        </ul>
    </body>
</html>
