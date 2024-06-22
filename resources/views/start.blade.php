<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResearchNoob Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('./css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('./css/start.css')}}">
</head>
<body>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="position-absolute outlined p-5">
            <div class="logo d-flex align-items-center">
                <img src="{{asset('images/logo.png')}}" alt="logo" height="100" width="100">
                <h1>ResearchNoob</h1>
            </div>
            <div class="buttons d-flex justify-content-evenly">
                <form action="login" method="GET">
                    <button type="submit" class="btn btn-outline-light">Login</button>
                </form>
                <form action="register" method="GET">
                    <button type="submit" class="btn btn-outline-light">Register</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        (function() {
            'use strict';
            const form = document.getElementById('loginForm');
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        })();
    </script>
    
</body>
</html>
