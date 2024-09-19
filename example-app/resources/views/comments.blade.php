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

    <ul>
        @foreach ($comments as $comment)
            <li>{{ $comment }}</li>
        @endforeach
    </ul>

    <p>
        Make your own comment!
        <br>
        <a href="http://0.0.0.0/comments/create">click here</a>
    </p>

    <p>
        <!--Put here a select of the commentaries-->
        Edit some comment [NOT WORKS ALREADY]
        <br>
        <a href="http://0.0.0.0/comments/$id/edit">click here</a>
    </p>

</body>
</html>
