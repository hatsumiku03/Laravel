<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @forelse($all as $data)
<tr>
    <th>{{ $data->title}}</th>
    <th>{{ $data->duration}}</th>
</tr>
@empty
    <tr><td colspan="2">No record found</td></tr>
@endforelse



</body>
</html>
