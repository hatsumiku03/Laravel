<link type="icon" href="favicon.ico" />
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
        @livewire('show-files')
    
    @if (!empty($success))
        <p class="text-white">{{$success}}</p>
    @endif
</div>
@livewireScripts
<script src="https://cdn.tailwindcss.com"></script>
</body>

