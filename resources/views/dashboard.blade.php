<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboardr</title>
</head>
<body>
    <h1>
        Olá {{auth()->user()->name}}, você está logado!
    </h1>
    <a href="{{route("logout")}}">Logout</a>
</body>
</html>