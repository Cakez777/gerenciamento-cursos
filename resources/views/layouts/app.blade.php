<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Sistema de Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @stack('styles')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Sistema de Cursos</a>
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('students.index') }}">Alunos</a>
                <a class="nav-link" href="{{ route('courses.index') }}">Cursos</a>
                <a class="nav-link" href="{{ route('enrollments.index') }}">Matrículas</a>
            </div>
        </div>
    </nav>

    <div class="container my-4">
        @include('partials.alerts')
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>