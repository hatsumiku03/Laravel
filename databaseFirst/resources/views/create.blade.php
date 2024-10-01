<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>

<form action="create">
    @csrf

    <p>Title</p>
    <input name="title">
    <p>Duration</p>
    <input name="duration">
<br>
<br>
    <button type="submit">Send it!</button>
<form>

</body>
</html>
