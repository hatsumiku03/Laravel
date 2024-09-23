<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comments</title>
</head>
<body>
    <h2>Comments</h2>

    @if ($comments == NULL)
        <p>No hay comentarios</p>
    @else
    <ul>
        @foreach ($comments as $comment)
            <li><a href="{{ url('/comments/'.$loop->index.'') }}">{{ $comment }}</a></li>
        @endforeach
    </ul>
    @endif

    <p>
        Make your own comment!
        <br>
        <a href="http://0.0.0.0/comments/create">click here</a>
    </p>

</body>
</html>
