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

    @foreach ($users as $user)
        <div>Name:{{$user->name}}</div>
        <div>Email:{{$user->email}}</div>
        <div>Birthdate:{{$user->birthdate}}</div>
        <div>Address:{{$user->address}}</div>
        <div>Status:{{$user->status}}</div>
        <div>Contact Number:{{$user->contact_number}}</div>
        <div>Password:{{$user->password}}</div>
        <hr>
    @endforeach

</body>
</html>
