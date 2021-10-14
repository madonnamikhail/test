<!DOCTYPE html>
<html>
<head>
    <title>Shopping cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <section style="background-color:#cccc; margin-left:auto; margin-top:100px;margin-right:auto;width:50%; height:50%;">
        <h3>Sub-Total : {{ $subtotal }} $</h3>
        <h3>Shipping  : {{$shipping}} $</h3>
        <h3>Vat : "14%" -> {{ $vat }} $</h3>
    </section>
</body>
</html>
