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
    <script src="./assets/js/question.js"></script>
</body>

</html>