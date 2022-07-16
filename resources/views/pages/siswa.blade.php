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
        <legend>Data siwa</legend>
        @foreach ($siswa as $data)
            <table>
                <tr>
                    <td>Id</td>
                    <td>:</td>
                    <td>{{ $data['id'] }}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ $data['name'] }}</td>
                </tr>
                <tr>
                    <td>umur</td>
                    <td>:</td>
                    <td>{{ $data['age'] }}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        @if ($data['age'] >= 17)
                            Anda Berhak Mendapatkan KTP
                        @else
                            Anda Belum Berhak Mendapatkan KTP
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Mapel</td>
                    <td>:</td>
                    <td>
                        @foreach ($data['mapel'] as $mapel)
                            <li>{{ $mapel }}</li>
                        @endforeach
                    </td>
                </tr>
            </table>
            <hr>
        @endforeach
    </fieldset>
</body>

</html>
