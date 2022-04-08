<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Default | Layout</title>

    <link rel="stylesheet" href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}">

</head>
<body>
<div class="container">

    {% includePath('/partials/menu/navbar.php') %}

    <div style="margin-top: 50px;">
        <h3>default layout</h3>
        {{ content }}
    </div>

</div>
<script type="application/javascript" src="{{ asset('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('/assets/js/app.js') }}"></script>
</body>
</html>