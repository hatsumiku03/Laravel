<div>
    <div>
        <x-input type="text" wire:model.live="search" placeholder="Search a file..." />
        <!-- This doens't work, fix it -->
    </div>
    
    @foreach ($files as $file)
    @can('view', $file)
    <tbody>
        <tr class="border-b bg-gray-800 border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-white">
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
    @endforeach

    <div class="">
        {{$files -> links('pagination::simple-tailwind')}}
    </div>
</div>
