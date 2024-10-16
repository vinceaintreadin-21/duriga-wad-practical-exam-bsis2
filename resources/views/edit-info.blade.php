<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Info</h1>

    <form action="{{Route('updateInfo', ['id' => $info->id])}}" method="POST">
        @method('PUT')
        @csrf
        <label for="name">Name:</label>
        <input value="{{$info->name}}" id="name" name="name" required>
        <br>
        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <br>
        <label for="contact_number">Contact Number: </label>
        <input value="{{$info->contact_number}}" id="contact_number" name="contact_number" required>
        <br>
        <label for="email">Email:</label>
        <input value="{{$info->email}}" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input value="{{$info->password}}" id="password" name="password" required>
        <br>
        <button type="submit">Edit Information</button>
    </form>
</body>
</html>
