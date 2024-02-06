<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Customer's Management </title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
    <!-- alertas swal -->
    @if(session('success'))
    <script>
        showAlert('success', '{{ session("success") }}');
    </script>
    @endif

    @if(session('error'))
    <script>
        showAlert('error', '{{ session("error") }}');
    </script>
    @endif

    @if($errors->any())
    <script>
        showAlert('error', '{{ $errors->first() }}');
    </script>
    @endif
</body>
</html>
