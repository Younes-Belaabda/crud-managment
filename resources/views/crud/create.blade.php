<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- create form -->
    <form action="/builder-tables/create/{{$tablename}}" method="post">
        @csrf
        @foreach ($columns as $column)
            <div>
                <input type="text" name="{{ $column['name'] }}" placeholder="{{ $column['name'] }}">
            </div>
        @endforeach
        <button>create</button>
    </form>
</body>
</html>
