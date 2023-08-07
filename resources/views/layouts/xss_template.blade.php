<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>@yield('title') 危険度:@yield('level')</h1>
    </header>
    
    <div class="container">
        <p>@yield('title')例: @yield('example')</p>
        
        <h2>@yield('cont-example')</h2>
        @yield('cont')

        @yield('link')
    </div>
    
    <footer>
        <p>&copy; 2023 kawagisi</p>
    </footer>
</body>
</html>