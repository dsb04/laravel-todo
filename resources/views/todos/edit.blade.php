<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefa</title>
</head>
<body>
    <a href="/todos/{todo}/{{$todo->id}}">
    <form action="/product/update/{{$todo->id}}" method="POST">
        @csrf
        <input type="text" name="title" pleaceholder="Preço" value="{{$todo->title}}">
    </form>
</body>
</html>