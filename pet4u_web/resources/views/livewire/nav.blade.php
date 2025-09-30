<nav>
    <ul>
        <li>
            <a class='text-2xl italic' href="{{ route('home') }}" wire:navigate>Home</a>
        </li>
        <li>
            <a class='text-2xl italic' href="{{ route('about') }}" wire:navigate>About</a>
        </li>
        <li>
            <a class='text-2xl italic' href="{{ route('contacts') }}" wire:navigate>Contacts</a>
        </li>
    </ul>
</nav>