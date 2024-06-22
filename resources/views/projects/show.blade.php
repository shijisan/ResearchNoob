
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResearchNoob Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('./css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('./css/sidebar.css')}}">
</head>
<body>

    <x-Nav/>
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse sidebarMenu">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Planning</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/paper/{{ $project->id }}">Paper</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/citations">Citations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/notes">Notes</a>
                    </li>
                </ul>
            </div>
        </nav>

        
    
</body>
</html>
