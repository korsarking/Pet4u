<header class="bg-white flex flex-col items-center justify-between py-4">
    <div class="flex items-center justify-between w-full px-4">
        <!-- language bar on the left -->
        <div class="flex justify-start w-1/3">
            <p class="text-sm text-gray-600">EN | RU</p>
        </div>
        <!-- logo image in center-->
        <div class="flex justify-center">
            <a href="{{ route('home') }}" wire:navigate>
                <img src="{{ asset('logos/logo.png') }}" alt="logo image" class="h-16 w-auto object-contain">
            </a>
        </div>
        <!-- search bar and Login on the right-->
        <div class="flex items-center justify-end w-1/3 gap-8">
            <div>
                <p class="text-gray-600">Search filter</p>
            </div>
            <div class="flex items-center gap-3">
                @auth
                    <span>Hi, {{ Auth::user()->username }}</span>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="cursor-pointer hover:text-orange-600 transition duration-200">
                            Logout
                        </button>
                    </form>
                @endauth
                @guest
                    <a class="hover:text-orange-600 transition duration-200" href="{{ route('login') }}">Sign in</a>
                    <a class="hover:text-orange-600 transition duration-200" href="{{ route('register') }}">Register</a>
                    @endguest
                </div>
            </div>
        </div>
</header>