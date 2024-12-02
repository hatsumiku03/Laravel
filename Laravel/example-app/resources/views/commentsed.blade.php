<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit the comment</title>
</head>
<body>
    <h2>Edit your comment</h2>

    <form method=POST action="/comments/{{ $id }}">
        @csrf
    <input type="hidden" name="_method" value="PATCH"/>
    <input type="text" name="comment" value="{{ $value }}"">
    <input type="submit" value="Rewrite">
    </form>
    <p>
        Back to the comments section
        <br>
        <a href="http://0.0.0.0/comments">click here</a>
    </p>
</body>
</html>
