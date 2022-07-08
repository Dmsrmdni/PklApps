<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($makanan == "ayam goreng")
        pesanan anda  {{$makanan}} = 150000
    @elseif($makanan == "lobster")
        pesanan anda  {{$makanan}} = 20000
    @elseif($makanan == "pizza")
        pesanan anda  {{$makanan}} = 50000
    @elseif($makanan == "tiramisu")
        pesanan anda  {{$makanan}} = 30000
    @elseif($makanan == "pasta")
        pesanan anda  {{$makanan}} = 25000   
    @else
    pesanan tidak tersedia
    @endif
</body>
</html>