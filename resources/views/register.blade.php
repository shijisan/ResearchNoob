<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ResearchNoob Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('./css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('./css/register.css')}}">
</head>
<body>

    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-md-6 m-auto px-5 text-center">
                <div class="d-flex align-items-center">
                    <img src="{{asset('images/logo.png')}}" alt="logo" height="100" width="100">
                    <h1>ResearchNoob</h1>
                </div>
                <h6>Got carried during senior high? We got you!</h6>
            </div>
            <div class="col-md-6 m-auto px-5">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3>Create an Account</h3>
                    </div>
                    <div class="card-body">
                        <form id="registerForm" action="/register" method="POST">@csrf
                            <div class="mb-3">
                                <label for="emailInput" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" id="emailInput" required>
                            </div>
                            <div class="mb-3">
                                <label for="passwordInput" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="passwordInput" required>
                            </div>
                            <div class="mb-3">
                                <label for="confirmPasswordInput" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="confirmPassword" id="confirmPasswordInput" required>
                                <div class="invalid-feedback" id="confirmPasswordError">Passwords do not match</div>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="agree" id="privacyCheckbox" required>
                                <label class="form-check-label" for="privacyCheckbox">I agree to the <a href="#">Privacy Policy</a> and <a href="#">Terms and Conditions</a></label>
                            </div>
                            <div class="d-grid gap-2 mt-3">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <small>
                            <p class="text-center mt-3">Already have an account? <a href="login">Login here</a></p>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const registerForm = document.getElementById('registerForm');
        const confirmPasswordInput = document.getElementById('confirmPasswordInput');
        const confirmPasswordError = document.getElementById('confirmPasswordError');
        const agreeCheckbox = document.getElementById('privacyCheckbox');

        registerForm.addEventListener('submit', function(event) {
            const password = document.getElementById('passwordInput').value;
            const confirmPassword = confirmPasswordInput.value;

            // Check if passwords match
            if (password !== confirmPassword) {
                confirmPasswordInput.classList.add('is-invalid');
                confirmPasswordError.textContent = 'Passwords do not match';
                event.preventDefault(); // Prevent form submission
                return false;
            } else {
                confirmPasswordInput.classList.remove('is-invalid');
                confirmPasswordError.textContent = '';
            }

            // Check if agree checkbox is ticked
            if (!agreeCheckbox.checked) {
                alert('You must agree to the terms and conditions before submitting.');
                event.preventDefault(); // Prevent form submission
                return false;
            }
        });
    </script>
    
</body>
</html>
