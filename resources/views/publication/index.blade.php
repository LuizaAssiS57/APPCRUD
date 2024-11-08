<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicações</title>
</head>
<body>
    <div>
        @foreach ($publications as $publication)
            <div>
                <h2>{{$publication->title}}</h2>
                <p>{{$publication->description}}</p>
                <img src="{{asset("storage/upload/$publication->file")}}" alt="{{$publication->title}}">
            </div>
        @endforeach
    </div>
</body>
</html>