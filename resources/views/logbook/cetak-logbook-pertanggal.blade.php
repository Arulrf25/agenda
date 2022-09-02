<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Data Bulanan Tamu Disperdagin</title>
    </head>
    <body>
        {{-- Tabel Cetak PDF --}}
        <p align="center"><b>Laporan Bulanan Data Tamu</b></p>
        <p align="center"><b>Dinas Perdagangan dan Perindustrian Kabupaten Cirebon</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Bidang Tujuan</th>
                <th>Keperluan</th>
                <th>Telepon</th>
            </tr>
            {{--  Perulangan  --}}
            @foreach ($cetakPertanggal as $logbook)
            {{--  Pengambilan data dari database  --}}
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $logbook->tanggal }}</td>
                <td>{{ $logbook->nama }}</td>
                <td>{{ $logbook->alamat }}</td>
                <td>{{ $logbook->tujuan }}</td>
                <td>{{ $logbook->keperluan }}</td>
                <td>{{ $logbook->telp }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
