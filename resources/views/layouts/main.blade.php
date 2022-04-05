<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield("title")</title>
        
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet"> 

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    img
                </a>
                <ul class="navbar-nav">
                    <li class="nav-intem">
                        <a href="" class="nav-link">Eventos</a>
                    </li>
                    <li class="nav-intem">
                        <a href="events/create" class="nav-link">Criar Eventos</a>
                    </li>
                    <li class="nav-intem">
                        <a href="" class="nav-link">Eventos</a>
                    </li>
                    <li class="nav-intem">
                        <a href="" class="nav-link">Cadastrar</a>
                    </li>
                    <li class="nav-intem">
                        <a href="" class="nav-link">Login</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>

    @yield("content")

    <footer>
        <p>HDC EVENTS &copy; 2022</p>
    </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>