<title>Login</title>

    <section class="bg-gray-950">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-white">
                <img class="w-8 h-8 mr-2" src="https://raw.githubusercontent.com/tetoterritory10/icons/refs/heads/main/IconsNotMine/DevilGenSymbolJin.png" alt="logo">
                Devil Swift
            </a>
            <div class="w-full rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 bg-[#660f0f] border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl">
                        Sign in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="POST" action="/login">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-white">Your email</label>
                            <input type="email" name="email" id="email" class="border border-gray-300 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-[#3e0606] text-white" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                            <input type="password" name="password" id="password" class="border border-gray-300 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-[#3e0606] text-white" required="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <!-- ! Don't work ! -->
                                <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded focus:ring-3 focus:ring-primary-300 bg-gray-700 border-gray-600 focus:ring-primary-600 ring-offset-gray-800">
                                </div>
                                <div class="ml-3 text-sm">
                                <label for="remember" class="text-gray-300">Remember me</label>
                                </div>
                            </div>
                            <!-- ! Don't work ! -->
                            <a href="#" class="text-white hover:text-gray-300 text-sm font-medium text-primary-600 hover:underline text-primary-500">Forgot password?</a>
                        </div>
                        <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign in</button>
                        <p class="text-sm font-light text-gray-400">
                            Don’t have an account yet? <a href="/register" class="font-medium text-primary-600 hover:underline text-primary-500">Sign up</a>
                        </p>
                    </form>
                </div>
            </div>
            @if (session('success'))
                <div class="alert alert-success text-white item-center justify-center py-2 px-1 bg-red-900 rounded mt-4">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </section>
    <script src="https://cdn.tailwindcss.com"></script>
