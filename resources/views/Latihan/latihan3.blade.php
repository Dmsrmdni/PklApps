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
        <legend>Data Tabel Mata Pelajaran</legend>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Kode MP</th>
                <th>Nama MP</th>
                <th>SKS</th>
                <th>SEMESTER</th>
            </tr>
            @php
                $no = 1;
            @endphp

            @foreach ($mapel as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data['kode_mp'] }}</td>
                    <td>{{ $data['nama_mp'] }}</td>
                    <td>{{ $data['sks'] }}</td>
                    <td>{{ $data['semester'] }}</td>
                </tr>
            @endforeach
        </table>
    </fieldset>
</body>

</html>
