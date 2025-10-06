<nav class="mt-4 border border-gray-300 w-full shadow-sm">
    <ul class="flex justify-center items-center gap-6 text-gray-700 py-2 font-medium">
        <li>
            <a class="hover:text-orange-600 duration-200" href="{{ route('home') }}" wire:navigate>Home</a>
        </li>
        <li>
            <a class="hover:text-orange-600 duration-200" href="{{ route('about') }}" wire:navigate>About</a>
        </li>
        <li>
            <a class="hover:text-orange-600 duration-200" href="{{ route('contacts') }}" wire:navigate>Contacts</a>
        </li>
    </ul>
</nav>