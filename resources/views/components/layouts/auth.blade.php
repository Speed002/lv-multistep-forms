<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A.A</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="p-5 login-form"> <!-- Added text-center class to center the login form -->
            <div class="d-flex justify-content-center align-items-center mb-5"> <!-- Centering the links -->
                <div>
                    <div class="d-flex gap-2 justify-content-center py-2">
                        <a href="#" class="badge d-flex align-items-center p-1 pe-2 text-secondary-emphasis bg-secondary-subtle rounded-pill">
                            <svg xmlns="http://www.w3.org/2000/svg" class="rounded-circle me-1 text-primary" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                            </svg><span class="text-secondary">Appname & logo</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center"> <!-- Centering the login form -->
                <div class="col-lg-5 col-md-7">

                        {{$slot}}

                </div>
            </div>
        </div>
    </div>

</body>
</html>
