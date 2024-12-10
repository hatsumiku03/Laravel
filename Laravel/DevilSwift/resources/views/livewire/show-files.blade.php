<div>
    @if ($previewFile)
        @livewire('preview-file')
    @else
    <div class="py-4">
        <x-input type="text" wire:model.live="search" placeholder="Search a file..." />
    </div>
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
                <th scope="col" class="px-6 py-3">
                    View
                </th>
                </tr>
            </thead>
        <tbody>
            <!-- If you search a private file that isn't own to you, don't display the message -->
            <!-- All is in Livewire/ShowFiles if you need to modify -->
            @if($files->count() == 0)
            <tr class="border-b bg-gray-800 border-gray-700">
                <th colspan="7" class="text-center py-4">
                    No se han encontrado resultados.
                </th>
            </tr>
            @else
    @foreach ($files as $file)
    @can('view', $file)
    
        <tr class="border-b bg-gray-800 border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-white hover:underline">
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
            <td class="px-6 py-4">
                <a wire:click="LetsSee({{ $file->id }})" class="hover:text-gray-200 hover:underline">View</a>
            </td>
        </tr>
    @endcan
    @endforeach
    @endif
</tbody>
</table>
<div class="">
    {{$files->links()}}
</div>
@endif
</div>
