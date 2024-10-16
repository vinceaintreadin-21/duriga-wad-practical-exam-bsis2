<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Transaction</h1>

    <form action="{{ route('updateTransaction', ['id' => $transaction->id])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="transaction_name">Transaction Name: </label>
        <input value="{{$transaction->transaction_name}}" id="transaction_name" name="transaction_name">
        <br>
        <label for="description">Description: </label>
        <input value="{{$transaction->description}}" id="description" name="description">
        <br>
        <label for="status">Status: </label>
        <select name="status" id="status">
            <option value="successful">Successful</option>
            <option value="declined">Declined</option>
        </select>
        <br>
        <label for="total_amount">Total Amount: </label>
        <input value="{{$transaction->total_amount}}" id="total_amount" name="total_amount">
        <br>
        <label for="transaction_number">Transaction Number: </label>
        <input value="{{$transaction->transaction_number}}" id="transaction_number" name="transaction_number">
        <br>
        <button type="submit">
            Update Transaction
        </button>
    </form>
</body>
</html>
