<title>Devil Swift</title>
<body class="bg-gray-950 text-white">
@include('components.logo')

@include('components.navbar')
    
@auth
@csrf
<div class="py-4 px-2">
    <form method="POST" action="/upload" enctype="multipart/form-data">
        @csrf
        <input type="file" name="uploaded_content">
        <input type="submit" class="bg-gray-200 px-1 rounded border-1 border-gray-400 text-gray-900" value="Send it!">
    </form>
</div>
@endauth


<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    File name
                </th>
                <th scope="col" class="px-6 py-3">
                    Owner
                </th>
                <th scope="col" class="px-6 py-3">
                    Size
                </th>
                <th scope="col" class="px-6 py-3">
                    Created at
                </th>
                <th scope="col" class="px-6 py-3">
                    Updated at
                </th>
                <th scope="col" class="px-6 py-3">
                    Delete
                </th>
                </tr>
            </thead>
        @foreach ($files as $file)
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <a href="/download/{{ $file->id}}">{{ $file->name}}</a>
                </th>
                <td class="px-6 py-4">
                    {{ $file->user->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $file->size() }}
                </td>
                <td class="px-6 py-4">
                    {{ $file->updated_at }}
                </td>
                <td class="px-6 py-4">
                    {{ $file->created_at }}
                </td>
                @if (optional(Auth::user())->can('delete', $file))
                <th scope="col" class="px-6 py-3">
                    <a href="/delete/{{ $file->id}}">Delete</a>
                </th>
                @else
                <th scope="col" class="px-6 py-3 text-red-500">
                    Don't authorised
                </th>
                @endif
            </tr>
        </tbody>
        @endforeach
    </table>
    @if (!empty($success))
        <p class="text-white">{{$success}}</p>
    @endif
</div>

</body>

<script src="https://cdn.tailwindcss.com"></script>