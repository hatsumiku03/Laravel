<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/stilos.css">
</head>
<body>

    <h2 class="tirel">Movies table</h2>
<br>

<div>
    @forelse($all as $data)
    <table>
<tr>
    <!-- ESTABLECER ID -->
    <th><a href="create/{{$id}}">{{ $data->title }}</a></th>
    <th><a href="">{{ $data->duration }}</a></th>
</tr>
@empty
    <tr><td colspan="2">No record found</td></tr>
@endforelse
    </table>
</div>

</body>
</html>
