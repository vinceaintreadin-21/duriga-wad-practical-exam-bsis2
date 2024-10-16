<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Hello Buboy</h1>
    <div>{{$user->name}}</div>
    
    <form action="{{Route('deleteUser', ['id' => $user->id])}}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">Delete User</button>
    </form>

    <form action="{{Route('showAllUsers')}}">
        <button type="submit">Back</button>
    </form>

    <form action="{{Route('editUser', ['id'=>$user->id])}}" method="GET">
        <button type="submit">Edit</button>
    </form>
</body>
</html>
