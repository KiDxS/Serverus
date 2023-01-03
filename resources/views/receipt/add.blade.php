<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('add.receipt') }}" method="post">
        @csrf
        <input type="text" name="customer_name" placeholder="customer_name" id="">
        <input type="text" name="address" placeholder="address" id="">
        <input type="text" name="phone_number" placeholder="phone_number" id="">
        <input type="text" name="product_id" placeholder="product_id" id="">
        <input type="text" name="quantity" placeholder="quantity" id="">
        <button type="submit">Submit</button>
    </form>
</body>

</html>