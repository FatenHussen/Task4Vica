<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name', 'Laravel Blog') }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        @include('layouts.navigation')

        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>

        <footer class="text-center py-3 mt-4 border-top">
            &copy; {{ date('Y') }} Laravel Blog. All Rights Reserved.
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
