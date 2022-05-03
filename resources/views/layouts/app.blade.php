<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    @livewireStyles()
    <div class="">
        @auth
            @livewire('navbar')
        @endauth

        <div class="">{{ $slot }}</div>
    </div>

    @livewireScripts()

</body>

</html>