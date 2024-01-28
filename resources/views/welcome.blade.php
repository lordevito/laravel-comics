<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Template</title>
    <link rel="stylesheet" href="../scss/app.scss">
    <!-- Includiamo gli assets con la direttiva @vite -->
    @vite('resources/js/app.js')
</head>
<body>
    <img src="{{ Vite::asset('resources/img/') }}" alt="">
</body>
</html>