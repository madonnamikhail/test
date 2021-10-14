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
        @if ($shoesdiscount != 0 || $jacketdiscount != 0 || $productCount >=2)
            <h3>Discounts:</h3>
        @endif
        @if ($shoesdiscount != 0)
            <h2>10% off shoes : - ${{$shoesdiscount}}</h2>
        @endif
        @if ($jacketdiscount != 0)
        {{-- <h3>Discounts:</h3> --}}
        <h2>10% off jacket : - ${{$jacketdiscount}}</h2>
        @endif
        @if ($productCount >=2)
        <h2>10% of shipping  : - $10</h2>
        <h1>Total : {{ $subtotal -($subtotal * 0.1)}}</h1>
        {{-- @endif --}}
        @else
        <h1>Total : {{ $subtotal}}</h1>
        @endif
    </section>
</body>
</html>
