<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    @livewire('header')
    @livewire('nav')
    <main>
        @yield("main")
    </main>
    @livewire('footer')
    @livewireScripts
</body>
</html>