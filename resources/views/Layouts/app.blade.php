
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
        }

        a {
            text-decoration: none;
        }

        .container {
            padding: 40px;
        }
    </style>
</head>
<body>

    @include('components.header')

    @yield('content')

</body>
</html>
