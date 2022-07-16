<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <legend>Data Artikel</legend>
        @foreach ($artikel as $data)
            <ul>
                <li>{{ $data['beranda'] }}</li>
                <li>{{ $data['berita'] }}</li>
                @foreach ($data['kategori_berita'] as $kategori_berita)
                    <ul>
                        <li>{{ $kategori_berita['name'] }}</li>
                        <ul>
                            @foreach ($kategori_berita['data'] as $kategori)
                                <li>{{$kategori}}</li>
                            @endforeach
                        </ul>
                    </ul>
                @endforeach
                <li>{{ $data['tentang'] }}</li>
            </ul>
        @endforeach
    </fieldset>
</body>

</html>


