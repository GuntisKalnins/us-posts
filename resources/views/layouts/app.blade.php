<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.partials._head')
    </head>
    <body>
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
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $(document).ready(function() { $(".e1").select2(); });
            });
        </script>
        
        @yield('scripts')

    </body>



</html>
