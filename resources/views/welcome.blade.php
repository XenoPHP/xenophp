<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XenoPHP</title>

    <!-- Bootstrap 5 CSS (Local) -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <style>
        body {
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light text-dark antialiased">
    <div class="min-vh-100 d-flex flex-column align-items-center justify-content-center selection-primary">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <main class="mt-5">
                        <h1 class="display-3 fw-bold mb-4 text-dark">
                            Welcome to XenoPHP
                        </h1>
                        <p class="lead text-secondary mb-4">
                            Combining the strengths of Laravel, CakePHP, Symfony, and CodeIgniter into a single, powerful backend framework.
                            <div class="small">
                             <span class="d-block d-md-inline mx-2">PHP v{{ $phpVersion }}</span>
                        </div>
                        </p>
                    </main>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle (Local) -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
