<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 40%;
            margin: 0px auto 28px auto;
        }

        .text{
            font-size: 23px;
        }
    </style>
</head>

<body>

    <fieldset>
        <legend class="text">Data Siaran</legend>
        <h2>Jadwal Penyiaran</h2>
        <hr>
        <br>
        @foreach ($penyiaran as $data)
        @php
            $no = 1;
        @endphp
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th colspan="4" class="text">{{ $data['nama_saluran'] }}</th>
                </tr>
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Nama Siaran</th>
                    <th colspan="2">Jadwal Siaran</th>

                </tr>
                <tr>
                    <th>Tanggal siaran</th>
                    <th>Jam siaran</th>
                </tr>
                @foreach ($data['jadwal'] as $jadwal)
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{ $jadwal['siaran'] }}</td>
                        <td>{{ $jadwal['tanggal'] }}</td>
                        <td>{{ $jadwal['jam'] }}</td>
                    </tr>
        @php
            $no++;
        @endphp
                @endforeach
        @endforeach
        </table>
    </fieldset>
</body>

</html>
