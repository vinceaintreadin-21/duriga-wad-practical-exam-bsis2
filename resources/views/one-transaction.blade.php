<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$transaction->transaction_name}}</h1>

    <div>ID: {{$transaction->id}} </div>
    <div>Description: {{$transaction->description}}</div>
    <div>Status: {{$transaction->status}}</div>
    <div>Total Amount: {{$transaction->total_amount}}</div>
    <div>Transaction Number: {{$transaction->transaction_number}}</div>
    <div>Date Created: {{$transaction->timestamps}}</div>

    <form action="{{ route('editTransaction', ['id' => $transaction->id])}}" method="GET">
        <button type="submit">edit</button>
    </form>
</body>
</html>
