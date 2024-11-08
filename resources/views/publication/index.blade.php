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
                <h1>{{$publication->title}}</h1>
                <p>{{$publication->description}}</p>
                <img width="500px" src="{{asset("storage/upload/$publication->file")}}" alt="{{$publication->title}}">
                <p>Categoria: {{$publication->category->name}}</p>

                <ul>
                    @foreach ($publication->comments as $comment)
                        <li>{{$comment->comment}}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</body>
</html>