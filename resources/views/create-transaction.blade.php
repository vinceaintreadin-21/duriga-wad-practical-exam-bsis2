<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Transaction</h1>

    <form action="{{Route('storeTransaction')}}" method="POST">
        @csrf
        <label for="transaction_name">Transaction Name: </label>
        <input type="text" id="transaction_name" name="transaction_name">
        <br>
        <label for="description">Description: </label>
        <input type="text" id="description" name="description">
        <br>
        <label for="status">Status: </label>
        <select name="status" id="status">
            <option value="successful">Successful</option>
            <option value="declined">Declined</option>
        </select>
        <br>
        <label for="total_amount">Total Amount: </label>
        <input type="text" id="total_amount" name="total_amount">
        <br>
        <label for="transaction_number">Transaction Number: </label>
        <input type="text" id="transaction_number" name="transaction_number">
        <br>
        <button type="submit">
            Make Transaction
        </button>
    </form>
</body>
</html>
