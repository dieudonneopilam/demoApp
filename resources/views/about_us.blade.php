<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About-us | hello city</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <p>Built with &hearts; by opilam</p>
        <p><a href="/">Revenir a la page d'acceuil</a></p>

        <p>I'ts currently {{ date('h:i A') }}</p>

        <footer>
            <p>&copy; Copyright {{ date('Y') }} &middot; <a href="/about-us">About us</a></p>
        </footer>
    </body>
</html>
