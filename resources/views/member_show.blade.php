<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Details</title>
</head>
<body>
    <h1>Member Details</h1>
    {{ $result[0]->id }} <br/>
    {{ $result[0]->fname }} <br/>
    {{ $result[0]->lname }} <br/>
    {{ $result[0]->address }} <br/>
</body>
</html>