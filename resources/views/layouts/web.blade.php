<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 8 Proyecto</title>
    <link rel="stylesheet" href=" {{asset('css/app.css')}} ">
</head>
<body>
    @include('layouts.navbar')
    
    <main class="py-10">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>
    <footer class="py-4 text-center">
        

    </footer>
</body>
</html>