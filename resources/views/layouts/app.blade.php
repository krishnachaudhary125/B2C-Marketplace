<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>B2C-Marketplace</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="bg-[#f1f3f3]">

    <div class="mx-5 my-5">

        @include('partials.header')

        <div class="mt-5">

            @yield('app')

        </div>

    </div>

    @include('partials.footer')

</body>

</html>