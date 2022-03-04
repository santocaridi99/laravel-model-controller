<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <header>
        {{-- qui andrà un header --}}
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
       {{-- qui andrà un footer --}}
    </footer>
</body>

</html>