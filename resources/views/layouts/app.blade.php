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

        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $(document).ready(function() { $(".e1").select2(); });
            });
        </script>

        <script>

            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("myImg");
            var modalImg = document.getElementById("img01");
            img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            }

            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
            modal.style.display = "none";
}
        </script>
    </body>



</html>
