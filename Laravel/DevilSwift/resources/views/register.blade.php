<title>Register</title>

<section class="bg-gray-950">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-white">
            <img class="w-8 h-8 mr-2" src="https://raw.githubusercontent.com/tetoterritory10/icons/refs/heads/main/IconsNotMine/DevilGenSymbolJin.png" alt="logo">
            Devil Swift
        </a>
        <div class="w-full rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 bg-[#660f0f] border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl">
                    Let's make your account!
                </h1>
                <form class="space-y-4 md:space-y-6" method="POST" action="/register">
                    @csrf
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-white">Name</label>
                        <input type="text" name="name" id="name" class="border border-gray-300 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-[#3e0606] text-white" required="">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-white">Your mail</label>
                        <input type="email" name="email" id="email" class="border border-gray-300 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-[#3e0606] text-white" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                        <input type="password" name="password" id="password" class="border border-gray-300 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-[#3e0606] text-white" required="">
                    </div>
                    <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Continue</button>
                </form>
                <p class="text-sm font-light text-gray-400">
                    You already have an account? <a href="/login" class="font-medium text-primary-600 hover:underline text-primary-500">Sign in</a>
                </p>
        </div>
    </div>
</section>


<script src="https://cdn.tailwindcss.com"></script>
