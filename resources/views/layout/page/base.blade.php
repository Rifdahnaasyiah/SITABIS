<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SITABIS</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('layout.page.style')
    @yield('style')

</head>

<body class="index-page">

<!-- Navbar -->
@include('layout.page.header')
<main class="main">
    <!-- Hero Section -->
    @yield('content')

    <!-- About Section -->
    <section id="about" class="about section">
        <!-- About content here -->
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <!-- Contact content here -->
    </section>

    @include('layout.page.footer')

    @include('layout.page.script')

    @yield('script')

</main>

</body>

</html>
