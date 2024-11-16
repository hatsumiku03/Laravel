<title>Devil Swift</title>
<body class="bg-gray-950 text-white">
@include('components.logo')

@include('components.navbar')

@auth

<div class="py-4 px-2">
    @livewire('file-uploader')
</div>
@endauth


<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-400">
        <thead class="text-xs uppercase bg-gray-50 bg-gray-700 text-gray-400">
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
        {{-- @foreach ($files as $file)
        @can('view', $file)
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
        @endcan
        @endforeach --}}
        @livewire('show-files')
    </table>
    @if (!empty($success))
        <p class="text-white">{{$success}}</p>
    @endif
</div>
@livewireScripts
<script src="https://cdn.tailwindcss.com"></script>
</body>

