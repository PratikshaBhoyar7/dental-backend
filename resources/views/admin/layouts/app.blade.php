<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="admin-body bg-light">

<div class="d-flex" id="admin-wrapper">
    @include('admin.layouts.sidebar')

    <div class="admin-content flex-grow-1">
        @include('admin.layouts.header')

        <main class="p-3 p-md-4">
            @yield('content')
        </main>
    </div>
</div>

<script>
    const wrapper = document.getElementById('admin-wrapper');
    document.getElementById('sidebarToggle')?.addEventListener('click', function () {
        wrapper?.classList.toggle('sidebar-open');
    });
    document.getElementById('sidebarBackdrop')?.addEventListener('click', function () {
        wrapper?.classList.remove('sidebar-open');
    });
</script>

</body>
</html>
