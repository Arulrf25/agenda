<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Data Administrator Siagan</title>
    </head>
    <body>
        {{-- Tabel Cetak PDF --}}
        <p align="center"><b>Laporan Data Administrator Siagan</b></p>
        <p align="center"><b>Dinas Perdagangan dan Perindustrian Kabupaten Cirebon</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th>No.</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>
            {{--  Perulangan  --}}
            @foreach ($data_users as $details)
            {{--  Pengambilan data dari database  --}}
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $details->name }}</td>
                <td>{{ $details->email }}</td>
                <td>{{ $details->created_at }}</td>
                <td>{{ $details->updated_at }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
