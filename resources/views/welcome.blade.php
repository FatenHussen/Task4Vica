<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Laravel Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-house-door"></i> Laravel Blog
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="bi bi-box-arrow-in-right"></i> Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">
                            <i class="bi bi-pencil-square"></i> Register
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Welcome Content -->
    <div class="container text-center mt-5">
        <h1>Welcome to Laravel Blog</h1>
        <p class="lead">
            Your platform to share your thoughts, ideas, and connect with others.
        </p>
        <div class="mt-4">
            <a href="{{ route('login') }}" class="btn btn-primary">
                <i class="bi bi-box-arrow-in-right"></i> Login
            </a>
            <a href="{{ route('register') }}" class="btn btn-secondary">
                <i class="bi bi-pencil-square"></i> Register
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-5 py-3 bg-light">
        <div class="container">
            <p>&copy; {{ date('Y') }} Laravel Blog. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
