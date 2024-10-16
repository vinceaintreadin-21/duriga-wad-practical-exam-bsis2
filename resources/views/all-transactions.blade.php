<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All Transactions</h1>

    <form action="{{Route('createTransaction')}}" method="GET">
        <button type="submit">create</button>
    </form>
    
    @foreach ($transactions as $transaction)
        <div>ID: {{$transaction->id}} </div>
        <div>Transaction Name: {{$transaction->transaction_name}}</div>
        <div>Description: {{$transaction->description}}</div>
        <div>Status: {{$transaction->status}}</div>
        <div>Total Amount: {{$transaction->total_amount}}</div>
        <div>Transaction Number: {{$transaction->transaction_number}}</div>
        <div>Date Created: {{$transaction->timestamps}}</div>
        <form action="{{Route('getOneTransaction', ['id' => $transaction->id])}}" method="GET">
            <button type="submit">view</button>
        </form>

        <form action="{{Route('deleteTransaction', ['id' => $transaction->id])}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
        </form>
        <hr>
    @endforeach
</body>
</html>
