<div class="bg-red-500">
    @auth
        {{Auth::user()->name}} |
        <a href="/logout">Log out</a>
    @else
        <a href="/login">Login</a>
    @endauth
</div>

@auth
@csrf
<div class="py-4 px-2">
    <form method="POST" action="/upload" enctype="multipart/form-data">
        @csrf
        <input type="file" name="uploaded_content">
        <input type="submit" class="bg-gray-100 rounded border-1 border-black" value="Send it!">
    </form>
</div>
@endauth

<!-- ! Niduft this and add this to the auth form !-->
@can('upload', App\Models\File::class)
@endcan


<table class="table-auto border-separate border border-black">
    <tr>
        <th class="border-1 border-black">File name</th>
        <th class="border-1 border-black">Owner</th>
        <th class="border-1 border-black">Size</th>
        <th class="border-1 border-black">Created at</th>
        <th class="border-1 border-black">Updated at</th>
    </tr>
    @foreach ($files as $file)
            @if (empty($file->id))
                <p>There is no data</p>
            @else
                <tr>
                    @can('delete', $file)
                    <td class="border-1 border-black"><a href="/delete/{{ $file->id}}">Delete</td>
                    @endcan
                    <td class="border-1 border-black"><a href="/download/{{ $file->id}}">{{ $file->name}}</a></td>
                    <td class="border-1 border-black">{{ $file->user->name }}</td>
                    <td class="border-1 border-black">{{ $file->size() }}</td>
                    <td class="border-1 border-black">{{ $file->updated_at }}</td>
                    <td class="border-1 border-black">{{ $file->created_at }}</td>
                </tr>
            @endif
        @endforeach
</table>

<script src="https://cdn.tailwindcss.com"></script>
