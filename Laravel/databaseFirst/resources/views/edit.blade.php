<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit the movie</title>
</head>
<body>
    <form method=POST action="movie/{id}">
        @csrf
        <p>Title</p>
        <input name="title" placeholder="Title" value="{{ $movie->title }}">
        <p>Duration</p>
        <input name="duration" placeholder="Duration" value="{{ $movie->duration }}">
    <br>
    <br>
        <button type="submit">Edit it!</button>
    <form>
</body>
</html>
