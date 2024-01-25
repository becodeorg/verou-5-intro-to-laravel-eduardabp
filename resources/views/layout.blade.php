<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @yield('title')
</head>
<body class="bg-warning-subtle">
    <nav class="nav justify-content-center bg-danger bg-gradient fixed-top">
        <a href="{{ route('home') }}" class="nav-link m-2 fs-3 link-warning text-decoration-underline">Home</a>
        <a href="{{ route('posts') }}" class="nav-link m-2 fs-3 link-warning text-decoration-underline">Articles</a>
        <a href="#" class="nav-link m-2 fs-3 link-warning text-decoration-underline">Spill the Tea</a>
    </nav>
    <header class="text-center pt-5 mt-5 mb-4 text-danger">
        <h1>Verou 5 Daily News</h1>
        <h2>Your everyday source of tea</h2>
    </header>
    <main>
        @yield('main')
    </main>
    <footer class="bg-danger bg-gradient fixed-bottom text-center">
        <p class="fs-6 text-warning m-0 p-1">This website is created for educational purposes.</p>
    </footer>
</body> 
</html>