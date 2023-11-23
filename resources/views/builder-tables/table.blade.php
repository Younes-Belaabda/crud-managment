<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- my table -->
    <table border="1">
        <thead>
            @foreach ($columns as $column)
                <th>{{ $column['name'] }}</th>
            @endforeach
        </thead>
    </table>
</body>
</html>
