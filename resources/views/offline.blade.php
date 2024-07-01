<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bible Reading Guide</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @laravelPWA
</head>
<div class="offline-view">
    <img />
</div>
</body>

</html>
