<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            width: 30%;
            margin-left: auto;
            margin-right:auto;
        }
    </style>
</head>



<body>
    <fieldset>
        <legend>Data Tabel Peserta</legend>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>No</th>
                <th>No Siswa</th>
                <th>Kode MP</th>
            </tr>
            @php
                $no = 1;
            @endphp

            @foreach ($peserta as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data['no_siswa'] }}</td>
                    <td>{{ $data['kode_mp'] }}</td>
                </tr>
            @endforeach
        </table>
    </fieldset>
</body>

</html>
