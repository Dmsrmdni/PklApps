<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>pesanan</h1>

    @if ($makanan1 == 'ayam goreng')
        pesanan pertama = <b> {{ $makanan1 }} </b> <br>
        Harga {{ $makanan1 }} = <b> 150000 </b>
    @elseif($makanan1 == 'lobster')
        pesanan pertama = <b> {{ $makanan1 }} </b> <br>
        Harga {{ $makanan1 }} = <b> 20000 </b>
    @elseif($makanan1 == 'pizza')
        pesanan pertama = <b> {{ $makanan1 }} </b> <br>
        Harga {{ $makanan1 }} = <b> 50000 </b>
    @elseif($makanan1 == 'tiramisu')
        pesanan pertama = <b> {{ $makanan1 }} </b> <br>
        Harga {{ $makanan1 }} = <b> 30000 </b>
    @elseif($makanan1 == 'pasta')
        pesanan pertama = <b> {{ $makanan1 }} </b> <br>
        Harga {{ $makanan1 }} = <b> 25000 </b>
    @else
        pesanan tidak tersedia
    @endif

    <hr>

    @if ($makanan2 == 'ayam goreng')
        pesanan kedua = <b> {{ $makanan2 }} </b> <br>
        Harga {{ $makanan2 }} = <b> 150000 </b>
    @elseif($makanan2 == 'lobster')
        pesanan kedua = <b> {{ $makanan2 }} </b> <br>
        Harga {{ $makanan2 }} = <b> 20000 </b>
    @elseif($makanan2 == 'pizza')
        pesanan kedua = <b> {{ $makanan2 }} </b> <br>
        Harga {{ $makanan2 }} = <b> 50000 </b>
    @elseif($makanan2 == 'tiramisu')
        pesanan kedua = <b> {{ $makanan2 }} </b> <br>
        Harga {{ $makanan2 }} = <b> 30000 </b>
    @elseif($makanan2 == 'pasta')
        pesanan kedua = <b> {{ $makanan2 }} </b> <br>
        Harga {{ $makanan2 }} = <b> 25000 </b>
    @else
        pesanan tidak tersedia
    @endif

</body>

</html>
