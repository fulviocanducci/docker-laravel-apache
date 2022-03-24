<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Test Test
    <form action="/test/create" enctype="multipart/form-data" method="POST">
        @csrf
        <input type="file" name="picture" id="picture"/>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>