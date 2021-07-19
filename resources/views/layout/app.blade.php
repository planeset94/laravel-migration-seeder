<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Home')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />


    @yield('css')
    @yield('js')
</head>

<body>
    <header id="site-header">
        <h3 class="title text-center">Le nostre migliori proposte</h3>
        <ul class="nav">
            <li>
                <i class="fas fa-star"></i><a href="">Eden Consiglia</a>
            </li>
            <li>
                <i class="fas fa-umbrella-beach"></i><a href="">Eden Village</a>
            </li>
            <li>
                <i class="fas fa-plane-departure"></i><a href="">Volo + Hotel</a>
            </li>
            <li>
                <i class="fas fa-bed"></i><a href="">Week End</a>
            </li>
        </ul>
    </header>

    <main id="site-main">
        @yield('content')
    </main>

    <footer id="site-footer">

    </footer>


</body>

</html>
