<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Painel Administrativo')</title>

    <!-- CSS -->
    <link href="{{ asset('admin/assets/css/argon-dashboard.css?v=2.1.0') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Scripts adicionais -->
    @stack('styles')
</head>
<body class="g-sidenav-show bg-gray-100">

    <!-- Barra Lateral -->
    @include('admin_templates.sidebar')

    <main class="main-content position-relative border-radius-lg">
        
        <!-- Navbar -->
        @include('admin_templates.navbar')

        <div class="container-fluid py-4">
            @yield('content')
        </div>

        <!-- Footer -->
        @include('admin_templates.footer')

    </main>

    <!-- Scripts -->
    <script src="{{ asset('admin/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/argon-dashboard.min.js') }}"></script>

    @stack('scripts')
</body>
</html>
