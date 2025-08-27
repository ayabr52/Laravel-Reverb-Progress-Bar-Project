<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel reverb</title>

        <!-- Fonts -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])

        @endif
    </head>
    <body >



<div class="progress">
<div id="progress-bar" class="progress-bar">
  <div class="progress-bar" style="width:0%" aria-valuenow="0%;" aria-valuemin="0%;" aria-valuemax="100%;">0%</div>
</div>
</div>


        <script>
        window.addEventListener('DOMContentLoaded', function() {
            let progress = document.getElementById('progress-bar');
            window.Echo.channel('progress').listen('ChangeProgressValue', (e) => {
                   progress.style.width = e.value + '%';
                    progress.innerHTML = e.value + '%';
        // handle event
    });
});


        </script>
    </body>
</html>
