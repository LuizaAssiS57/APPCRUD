<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicação - Criar</title>
</head>
<body>
    <form action="{{route('publication.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" id="title" placeholder="Titulo da publicação">
        <textarea name="description" id="description">Descrição</textarea>
        <input type="file" name="file" id="file">
        <select name="category" id="category">
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>