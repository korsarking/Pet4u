<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <h1 class='text-3xl'>Pet4u</h1>

        <nav>
            <ul>
                <li>
                    <a class='text-2xl italic' href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a class='text-2xl italic' href="{{ route('about') }}">About</a>
                </li>
                <li>
                    <a class='text-2xl italic' href="{{ route('contacts') }}">Contacts</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        @yield("main")
    </main>
</body>
</html>