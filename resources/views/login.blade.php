<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('login.store')}}" method="post">
        @csrf
        <input type="email" name="email" id="email" required placeholder="E-mail">
        <input type="password" name="password" id="password" required placeholder="Senha">
        <input type="submit" value="Logar">
    </form>
</body>
</html>
