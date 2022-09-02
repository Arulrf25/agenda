<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- JavaScript -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <title>Siagan Dinas Perdagangan dan Perindustrian Kabupaten Cirebon</title>
</head>

<style>
    ul {
        float: right;
        list-style-type: none;
        /* margin-top: 20px */
    }

    li {
        text-decoration: none;
        color: #fff;
        padding: 0px 20px;
        border: 0px solid;
        margin-top: 5px;
    }
</style>

<body>
    <nav class="navbar" style=background-color:#2f4f4e;>

        <div class="text-light">
            <table>
                <tr>
                    <th><img src="{{asset('img/LOGO.png')}}" alt="" width="60" height="60" class="text-center"></th>
                    <th><strong>DINAS PERDAGANGAN DAN PERINDUSTRIAN <br>
                            KABUPATEN CIREBON</strong></th>
                </tr>

            </table>

        </div>

        <ul>
            <li>
                <center>
                    <strong>
                        <span id="jamServer" style="font-size:x-large;"><?php //date_default_timezone_set('Asia/Jakarta');
                                                                        echo date("H:i:s"); ?></span>
                    </strong>
                    <script type="text/javascript" src="{{asset('assets/js/jamServer.js')}}">
                    </script>
                    <br>
                    {{ \Carbon\Carbon::now()->translatedFormat('l , d F Y') }}
                </center>
            </li>
        </ul>

    </nav>
    <br>

    <!-- tabel untuk Agenda Sekarang -->
    <div class="text-light" style=background-color:#2f4f4e;>
        <marquee behavior="alternate" direction="right">
            <h4><strong>AGENDA KEGIATAN HARI INI</strong></h4>
        </marquee>
    </div>

    <table class="table table-striped table-hover" style="vertical-align: middle">
        {{-- Judul tabel  --}}
        <tr>
            <th>No.</th>
            <th>Nama Kegiatan</th>
            <th>Tanggal Pelaksanaan</th>
            <th>Waktu Pelaksanaan</th>
            <th>Tempat Kegiatan</th>
            <th>Pelaksana Kegiatan</th>
        </tr>
        {{-- Perulangan  --}}
        @foreach ($data_agenda as $index=>$agenda)
        {{-- Pengambilan data dari database  --}}
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $agenda->nama }}</td>
            <td>{{ $agenda->tanggal }}</td>
            <td>{{ $agenda->waktu }}</td>
            <td>{{ $agenda->tempat }}</td>
            <td>{{ $agenda->pelaksana }}</td>
        </tr>
        @endforeach
    </table>

    <!-- Table Untuk agenda besok -->
    <div class="text-light" style=background-color:#2f4f4e;>
        <marquee behavior="alternate" direction="left">
            <h4><strong>AGENDA KEGIATAN BESOK</strong></h4>
        </marquee>
    </div>

    <table class="table table-striped table-hover" style="vertical-align: middle">
        {{-- Judul tabel  --}}
        <tr>
            <th>No.</th>
            <th>Nama Kegiatan</th>
            <th>Tanggal Pelaksanaan</th>
            <th>Waktu Pelaksanaan</th>
            <th>Tempat Kegiatan</th>
            <th>Pelaksana Kegiatan</th>
        </tr>
        {{-- Perulangan  --}}
        @foreach ($data_besok as $index=>$agenda)
        {{-- Pengambilan data dari database  --}}
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $agenda->nama }}</td>
            <td>{{ $agenda->tanggal }}</td>
            <td>{{ $agenda->waktu }}</td>
            <td>{{ $agenda->tempat }}</td>
            <td>{{ $agenda->pelaksana }}</td>
        </tr>
        @endforeach
    </table>

    <!-- Footer -->
    <div class="card-footer text-muted">
        <marquee behavior="" direction="">
            <h5 style="margin-top: 5px;"><strong>TERIMA KASIH UNTUK TETAP MEMAKAI MASKER, MENJAGA JARAK, DAN TIDAK MEMBUAT KERUMUNAN DI DISPERDAGIN KABUPATEN CIREBON</strong></h5>
        </marquee>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
