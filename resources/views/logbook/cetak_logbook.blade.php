<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Data Tamu Disperdagin</title>
    </head>
    <body>
        {{-- Tabel Cetak PDF --}}
        <p align="center"><b>Laporan Buku Tamu</b></p>
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
            @foreach ($data_tamu as $buku_tamu)
            {{--  Pengambilan data dari database  --}}
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $buku_tamu->tanggal }}</td>
                <td>{{ $buku_tamu->nama }}</td>
                <td>{{ $buku_tamu->alamat }}</td>
                <td>{{ $buku_tamu->tujuan }}</td>
                <td>{{ $buku_tamu->keperluan }}</td>
                <td>{{ $buku_tamu->telp}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
