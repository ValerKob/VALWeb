<!DOCTYPE html>
<html lang="RU-ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="../assets/img/favicon.png" type="image/png" />
    <title>@yield('title')</title>

    <!-- Links -->
    <link href="https://fonts.cdnfonts.com/css/gilroy-bold" rel="stylesheet">

    <!-- Animated -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/mainPage.css">
</head>

<body>
    <!-- Header -->
    @include('includes.main.header')

    <!-- Main -->
    @yield('content')

    <!-- Fooret -->
    @include('includes.main.footer')

    <!-- JS -->
    <script src="./assets/js/links.js"></script>
    <script src="./assets/js/burger.js"></script>
    <script src="./assets/js/question.js"></script>
    <script src="./assets/js/sticky.js"></script>

    <!-- JS WOW -->
    <script src="./assets/js/wow.min.js"></script>
    <script>new WOW().init();</script>
</body>

</html>