<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All Informations</h1>

    @foreach ($infos as $info)
        <div>Name: {{$info->name}}</div>
        <div>Gender: {{$info->gender}}</div>
        <div>Contact Number: {{$info->contact_number}}</div>
        <div>Email: {{$info->email}}</div>
        <div>Password: {{$info->password}}</div>

        <form action="{{Route('deleteInfo', ['id' => $info->id])}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit">Delete Info</button>
        </form>
        <hr>
    @endforeach
</body>
</html>
