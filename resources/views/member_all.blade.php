<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members List</title>
</head>

<body>
    <h1>Members List</h1>
    @foreach($result as $rs)
        <p>{{ $rs->id }} - {{ $rs->firstname }} {{ $rs->lastname }} {{ $rs->address }}</p>
    @endforeach
</body>

</html>