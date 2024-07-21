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
        <div class="p-5 login-form">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                        {{$slot}}
                </div>
            </div>
        </div>
    </div>

</body>
</html>
