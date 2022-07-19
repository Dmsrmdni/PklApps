<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 70%;
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

        <h1>Tabel Pengunjung</h1>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>ID Pengunjung</th>
                <th>Nama Pengunjung</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>No Telepon</th>
                <th>No KTP</th>

            </tr>
            @foreach ($pengunjung as $data)
            <tr>
                <td>{{ $data['id_pengunjung'] }}</td>
                <td>{{ $data['nama_pengunjung'] }}</td>
                <td>{{ $data['alamat'] }}</td>
                <td>{{ $data['jk'] }}</td>
                <td>{{ $data['no_tlpn'] }}</td>
                <td>{{ $data['no_ktp'] }}</td>
            </tr>
            @endforeach
        </table>

        <hr>

        <h1>Tabel Karyawan</h1>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>ID Karyawan</th>
                <th>Nama Karyawan</th>
                <th>Jenis Kelamin</th>
            </tr>
            @foreach ($karyawan as $data)
            <tr>
                <td>{{ $data['id_karyawan'] }}</td>
                <td>{{ $data['nama_karyawan'] }}</td>
                <td>{{ $data['jk'] }}</td>
            </tr>
            @endforeach
        </table>

        <hr>

        <h1>Tabel Kamar</h1>
        <table border="1" cellpadding="4" cellspacing="0">
            <tr>
                <th>No Kamar</th>
                <th>Jenis Kamar</th>
                <th>Harga</th>
            </tr>
            @foreach ($kamar as $data)
            <tr>
                <td>{{ $data['no_kamar'] }}</td>
                <td>{{ $data['jenis_kamar'] }}</td>
                <td>{{ $data['harga'] }}</td>
            </tr>
            @endforeach
        </table>

        <hr>
        <h1>Tabel Transaksi</h1>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>No Transaksi</th>
                <th>ID Pengunjung</th>
                <th>ID Karyawan</th>
                <th>Jumlah Kamar</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Keluar</th>
                <th>Lama Menginap</th>
                <th>Total Harga</th>
            </tr>
            @foreach ($transaksi as $data)
            <tr>
                <td>{{ $data['no_transaksi'] }}</td>
                <td>{{ $data['id_pengunjung'] }}</td>
                <td>{{ $data['id_karyawan'] }}</td>
                <td>{{ $data['jumlah_kamar'] }}</td>
                <td>{{ $data['tanggal_masuk'] }}</td>
                <td>{{ $data['tanggal_keluar'] }}</td>
                <td>{{ $data['lama_nginap'] }}</td>
                <td>{{ $data['total_harga'] }}</td>

            </tr>
            @endforeach
        </table>

        <hr>
        <h1>Tabel Detail Transaksi</h1>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>ID Detail Transaksi</th>
                <th>No Transaksi</th>
                <th>No Kamar</th>
            </tr>
            @foreach ($detail_transaksi as $data)
            <tr>
                <td>{{ $data['id_detail_transaksi'] }}</td>
                <td>{{ $data['no_transaksi'] }}</td>
                <td>{{ $data['no_kamar'] }}</td>
            </tr>
            @endforeach
        </table>


    </fieldset>
</body>

</html>
