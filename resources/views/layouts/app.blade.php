<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tareas')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin-top: 0;
            background-color: #ffffff;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
        }

        .main-content {
            padding-top: 60px;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <nav class="shadow-sm navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-4 main-content">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container text-center">
            <p>&copy; {{ date('Y') }} Web Tasks. All rights reserved. Created for Lcdo. Rod Rodríguez</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
