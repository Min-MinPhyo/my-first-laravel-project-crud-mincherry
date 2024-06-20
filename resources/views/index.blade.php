<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="color:green">Insert Successfully Data</h1>
    @foreach ($users as $user)
    <p style="color:blue,italic">{{$user->name}} || {{$user->email}} || {{$user->password}}</p>

    <a href="/delete/{{$user->id}}">Delete</a>
    <a href="/edit/{{$user->id}}">Edit</a>





    @endforeach
    <h3>Store User Data :</h3>

    <form action="/insert" method="POST">
        @csrf
        <input type=" text" name="name" placeholder="Enter name"><br>
        <input type="email" name="email" placeholder="Enter email"><br>
        <input type="password" name="password" placeholder="Enter password"><br>
        <input type="submit" value="Store">
    </form>

</body>

</html>