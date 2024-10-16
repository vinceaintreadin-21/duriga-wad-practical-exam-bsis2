<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{Route('updateUser', ['id' => $user->id])}}" method="POST">
        @method('PUT')
        @csrf
        <label for="name">Name:</label>
        <input value="{{$user->name}}" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input value="{{$user->email}}" id="email" name="email" required>
        <br>
        <label for="birthdate">Birthdate:</label>
        <input value="{{$user->birthdate}}" id="birthdate" name="birthdate" required>
        <br>
        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="active">active</option>
            <option value="inactice">inactive</option>
        </select>
        <br>
        <label for="address">Address:</label>
        <input value="{{$user->address}}" id="address" name="address" required>
        <br>
        <label for="contact_number">Contact Number:</label>
        <input value="{{$user->contact_number}}" id="contact_number" name="contact_number" required>
        <br>
        <label for="password">Password:</label>
        <input value="{{$user->password}}" id="password" name="password" required>

        <button type="submit">
            Update User
        </button>
    </form>
</body>
</html>
