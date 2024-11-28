    <nav class="bg-red-900 text-gray-100">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-3">
            <!-- | Devil Swift Logo & Name |-->
        <a href="/" class="flex items-center space-x-2 rtl:space-x-reverse ml-[-19em]">
            <img src="https://raw.githubusercontent.com/tetoterritory10/icons/refs/heads/main/IconsNotMine/DevilGenSymbolJin.png" class="h-12 w-12" alt="Devil Swift Logo" />
            <span class="self-center text-4xl font-semibold whitespace-nowrap dark:text-white">Devil Swift</span>
            @auth
            <span class="self-center text-4xl font-semibold whitespace-nowrap dark:text-white">|</span>
            <span class="text-xl font-semibold pointer-events-none cursor-none">{{Auth::user()->name}}</span>
        </a>

        <!-- | Account |-->
            <div class="hidden w-full md:block md:w-auto fixed" id="navbar-default">
                <a class="block py-2 px-3 text-white hover:text-gray-300 hover:underline md:p-0 text-white text-xl top-[1em] right-9 fixed" wire:navigate href="/logout">Log out</a>
                @else
                <a class="block py-2 px-3 text-white hover:text-gray-300 hover:underline md:p-0 text-white text-xl right-[6em] absolute" wire:navigate href="/login">Sing in</a>
                <a class="block py-2 px-3 text-white md:p-0 text-white hover:text-gray-300 hover:underline text-xl right-8 absolute" wire:navigate href="/login">Sign up</a>
                @endauth
            </div>  
        </div>
    </nav>
