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
        }

        .text {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend>Data Nilai</legend>

        <center>
            @foreach ($nilai as $data)
                <table border="1" cellpadding="10" cellspacing="0">
                    <tr>
                        <th colspan="4" class="text">Data Dosen</th>
                    </tr>
                    <tr>
                        <td colspan="2"><strong> Nama Dosen </strong></td>
                        <td colspan="2">{{ $data['nama_dosen'] }}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong> Matkul </strong></td>
                        <td colspan="2">{{ $data['matkul'] }}</td>
                    </tr>

                    <tr>
                        <th colspan="4" class="text">Data Mahasiswa</th>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th>siswa bimbingan</th>
                        <th>nilai</th>
                        <th>grade</th>
                    </tr>
                    @php
                        $no = 1;
                        $nilai = 0;
                    @endphp
                    @foreach ($data['siswa_bimbingan'] as $siswa_bimbingan)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $siswa_bimbingan['nama'] }}</td>
                            <td>{{ $siswa_bimbingan['nilai'] }}</td>
                            <td>
                                @if ($siswa_bimbingan['nilai'] >= 90 && $siswa_bimbingan['nilai'] <= 100)
                                    A
                                @elseif($siswa_bimbingan['nilai'] >= 80 && $siswa_bimbingan['nilai'] <= 89)
                                    B
                                @elseif($siswa_bimbingan['nilai'] >= 70 && $siswa_bimbingan['nilai'] <= 79)
                                    C
                                @elseif($siswa_bimbingan['nilai'] >= 50 && $siswa_bimbingan['nilai'] <= 69)
                                    d
                                @elseif($siswa_bimbingan['nilai'] >= 0 && $siswa_bimbingan['nilai'] <= 49)
                                    d
                                @endif
                            </td>
                        </tr>
                        @php
                            $no++;
                            $nilai += $siswa_bimbingan['nilai'];
                            $rata = $nilai / count($data['siswa_bimbingan']);
                            
                            if ($rata >= 90 && $rata <= 100) {
                                $grade = 'A';
                            } elseif ($rata >= 80 && $rata <= 89) {
                                $grade = 'B';
                            } elseif ($rata >= 70 && $rata <= 79) {
                                $grade = 'C';
                            } elseif ($rata >= 50 && $rata <= 69) {
                                $grade = 'D';
                            } elseif ($rata >= 0 && $rata <= 49) {
                                $grade = 'E';
                            }
                        @endphp
                    @endforeach

                    <tr>
                        <th colspan="4" class="text">Keterangan</th>
                    </tr>
                    <tr>
                        <td colspan="3"> <strong>Total Nilainya</strong></td>
                        <td colspan="1">{{ $nilai }}</td>
                    </tr>
                    <tr>
                        <td colspan="3"> <strong>Nilai Rata Ratanya adalah</strong></td>
                        <td colspan="1">{{ $rata }}</td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong> Grade Dosen {{ $data['nama_dosen'] }}</strong></td>
                        <td colspan="1">{{ $grade }}</td>
                    </tr>
                </table>
                <hr>
                <br>
            @endforeach
        </center>
    </fieldset>
</body>

</html>
