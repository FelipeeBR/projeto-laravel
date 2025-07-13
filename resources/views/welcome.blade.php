<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Full Stack Web Developer</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="">
        <header class="">
            
        </header>
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold">Full Stack Web Developer</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Sistema que auxilia no controle de uma fazenda de bovinos</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    @if (Route::has('login'))
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class=""
                            >
                                Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="btn btn-primary"
                            >
                                Login
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="btn btn-secondary">
                                    Registre-se
                                </a>
                            @endif
                        @endauth
              
                    @endif
                </div>
            </div>
        </div>
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"></div>
        @endif
    </body>
</html>
