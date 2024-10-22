<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ginatovaralmario">
    <meta name="project" content="laravel-first">
    <title>Home</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-3 text-success">
                    {{ $titolo }}
                </h1>
            </div>
            <div class="col">
                <h2>Books to read</h2>
                <ul>
                    @foreach ($listToRead as $listItem )
                        <li>
                            {{$listItem}}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
</body>
</html>
