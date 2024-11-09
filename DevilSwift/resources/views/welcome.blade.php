<title>Devil Swift</title>
<body class="bg-gray-950 text-white">
@include('components.logo')

@include('components.navbar')
    
@auth

<div class="py-4 px-2">
    <form method="POST" action="/upload" enctype="multipart/form-data">
        @csrf
        <input  type="file" name="uploaded_content">
        <input type="submit" class="bg-gray-200 px-1 rounded border-1 border-gray-400 text-gray-900" value="Send it!">

    <span>
        <input type="radio" id="public" name="public_visibility" value="1" class="hidden peer" required checked/>
        <label for="public" class="transition inline-flex items-center justify-between px-1 ml-4 text-gray-400 bg-gray-800 border border-gray-700 rounded-lg cursor-pointer hover:text-gray-300 hover:bg-gray-700 peer-checked:text-green-500 peer-checked:border-green-600">
            <div class="block">
                <div class="text-lg font-semibold">Public</div>
            </div>
        </label>
    </span>   
    <span>
        <input type="radio" id="private" name="public_visibility" value="0" class="hidden peer">
        <label for="private" class="transition inline-flex items-center justify-between px-1 m-1 text-gray-400 bg-gray-800 border border-gray-700 rounded-lg cursor-pointer hover:text-gray-300 hover:bg-gray-700 peer-checked:text-red-500 peer-checked:border-red-600">
            <div class="block">
                <div class="text-lg font-semibold">Private</div>
            </div>
        </label>
        @if (session('status'))
            <span class="alert alert-success">
                {{ session('status') }}
            </span>
        @else
            
        @endif
    </span> 


    </form>
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
        @foreach ($files as $file)
            @if ($file->public_visibility == 1 || $file->public_visibility == 0 && $file->user->id === Auth::id())
                @include('welcome.filetable')
            @endif
        @endforeach
    </table>
    @if (!empty($success))
        <p class="text-white">{{$success}}</p>
    @endif
</div>

</body>

<script src="https://cdn.tailwindcss.com"></script>