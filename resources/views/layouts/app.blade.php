<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Laravel Site')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        header, footer { background: #2c3e50; color: white; padding: 1rem; text-align: center; }
        nav { background: #34495e; padding: 0.5rem; text-align: center; }
        nav a { color: white; margin: 0 1rem; text-decoration: none; }
        nav a:hover { text-decoration: underline; }
        main { padding: 2rem; min-height: 60vh; }
    </style>
</head>
<body>
    <header>
        <h1>My Laravel Site</h1>
    </header>

    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} My Laravel Site. All rights reserved.</p>
    </footer>
</body>
</html>