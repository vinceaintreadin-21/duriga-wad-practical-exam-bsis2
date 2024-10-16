<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>USER PAGE</h1>

    <form action="{{Route('createUser')}}">
        <button type="submit">Create User</button>
    </form>
    @foreach ($users as $user)
        <div>Name:{{$user->name}}</div>
        <div>Email:{{$user->email}}</div>
        <div>Birthdate:{{$user->birthdate}}</div>
        <div>Address:{{$user->address}}</div>
        <div>Status:{{$user->status}}</div>
        <div>Contact Number:{{$user->contact_number}}</div>
        <div>Password:{{$user->password}}</div>

        <form action="{{Route('showUser', ['id'=>$user->id])}}" method="GET">
            <button type="submit">View User</button>
        </form>
        <hr>
    @endforeach

</body>
</html>
