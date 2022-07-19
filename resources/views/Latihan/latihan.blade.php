<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }

        fieldset {
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }

        h1 {
            text-align: center
        }

    </style>
</head>

<body>
    <fieldset>
        <legend>Latihan</legend>
        <h1>Tabel Siswa</h1>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>No Siswa</th>
                <th>Nama</th>
                <th>JK</th>
                <th>Jurusan</th>
            </tr>
            @foreach ($siswa as $data)
            <tr>
                <td>{{ $data['no_siswa'] }}</td>
                <td>{{ $data['nama'] }}</td>
                <td>{{ $data['jk'] }}</td>
                <td>{{ $data['jurusan'] }}</td>
            </tr>
            @endforeach
        </table>

        <br>
        <hr>
        <h1>Tabel Peserta</h1>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>No Siswa</th>
                <th>Kode MP</th>
            </tr>

            @foreach ($peserta as $data)
            <tr>
                <td>{{ $data['no_siswa'] }}</td>
                <td>{{ $data['kode_mp'] }}</td>
            </tr>
            @endforeach
        </table>

        <br>
        <hr>

        <h1>Tabel Mata Pelajaran</h1>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>Kode MP</th>
                <th>Nama MP</th>
                <th>SKS</th>
                <th>SEMESTER</th>
            </tr>

            @foreach ($mapel as $data)
            <tr>
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
