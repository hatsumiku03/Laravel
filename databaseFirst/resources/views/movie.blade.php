<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widp=device-widp, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Individual movie</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <p class="font-bold">Title:</p>
    <p>{{ $movie->title }}</p>
    <p class="font-bold">Duration:</p>
    <p>{{ $movie->duration }}</p>
</body>
</html>
