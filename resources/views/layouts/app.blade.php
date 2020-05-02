<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.partials._head')
    </head>
    <body style="background: url('/storage/uploads/american-flag.jpg') no-repeat center center fixed">
        <div id="app">
            @include('layouts.partials._navigation')
            
            <main class="mt-6">
                <div class="container-fluid">
                    @include('layouts.partials._alerts')
                    @yield('content')
                </div>
            </main>

            <footer class="mt-3">
                @include('layouts.partials._footer')
            </footer>
            
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $(document).ready(function() { $(".e1").select2(); });
            });
        </script>
        
        @yield('scripts')

    </body>



</html>
