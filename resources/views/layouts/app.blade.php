<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <title>Hospital Appoinment Management System</title>

    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <livewire:styles />
</head>
<body>
    <livewire:header />

    {{ $slot }}

    <livewire:footer />

    <a href="#" class="scroll-top">
        <i class="bi bi-chevron-up"></i>
    </a>

    <livewire:scripts />
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>