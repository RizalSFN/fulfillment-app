<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    {{-- bootstrap css --}}
    <link rel="stylesheet" href="css/bootstrap.min.css">

    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="icons/bootstrap-icons.css">
</head>
<body>
    @include('partials.sidebar')
    <div class="">
        @yield('container')
    </div>
    {{-- bootstrap js --}}
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>