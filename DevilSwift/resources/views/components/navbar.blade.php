<div class="bg-red-900 text-gray-100">
        <!-- Logo -->
        <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-white">
            <img class="w-8 h-8 mr-2" src="https://raw.githubusercontent.com/hatsumiku03/icons/refs/heads/main/IconsNotMine/DevilGenSymbolJin.png" alt="logo">
            Devil Swift
        </a>
        <div class="relative">
            @auth
            {{Auth::user()->name}} |
            <a class="absolute bottom-7 right-0" href="/logout">Log out</a>
            @else
            <a class="absolute bottom-7 right-2" href="/login">Login</a>
            @endauth
        </div>
</div>
