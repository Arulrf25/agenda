<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Data Agenda Bulanan Disperdagin</title>
    </head>
    <body>
        {{-- Tabel Cetak PDF --}}
        <p align="center"><b>Laporan Bulanan Kegiatan</b></p>
        <p align="center"><b>Dinas Perdagangan dan Perindustrian Kabupaten Cirebon</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th>No.</th>
                <th>Nama Kegiatan</th>
                <th>Tanggal Pelaksanaan</th>
                <th>Waktu Pelaksanaan</th>
                <th>Tempat Kegiatan</th>
                <th>Pelaksana Kegiatan</th>
                <th>Waktu Input</th>
            </tr>
            {{--  Perulangan  --}}
            @foreach ($cetakPertanggal as $agenda)
            {{--  Pengambilan data dari database  --}}
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $agenda->nama }}</td>
                <td>{{ $agenda->tanggal }}</td>
                <td>{{ $agenda->waktu }}</td>
                <td>{{ $agenda->tempat }}</td>
                <td>{{ $agenda->pelaksana }}</td>
                <td>{{ $agenda->created_at}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
