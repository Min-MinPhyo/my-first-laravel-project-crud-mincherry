<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<h3>Edit & Update User</h3>
<form action="/update/{{$editUsers->id}}" method="POST">
    @csrf
    <input type=" text" name="name" value="{{$editUsers->name}}"><br>
    <input type="email" name="email" value="{{$editUsers->email}}"><br>
    <input type="password" name="password" value="{{$editUsers->password}}"><br>
    <input type="submit" value="Update">
</form>


<body>

</body>

</html>