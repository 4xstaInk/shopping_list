<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Tailwind --}}
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <script src="{{ mix('js/app.js') }}" defer></script>

    <title>Livewire project</title>
    @livewireStyles
</head>
<body>
    @livewire('nav-bar')
    {{$slot}}
    @livewireScripts
</body>
</html>