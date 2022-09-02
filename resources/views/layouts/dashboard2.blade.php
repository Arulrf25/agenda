<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <!-- JavaScript -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

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
    .owl-carousel .item {
    height: 10rem;
    background: #fcca03;
    padding: 0.5rem;
  }
  .owl-carousel .item h5 {
    color: #081c1b;
    font-family: 'Courier New', Courier, monospace;
    font-weight: bold;
    margin-top: 0rem;
   }
</style>

<body style=background-color:#099b6d;>
    <nav class="navbar" style=background-color:#2f4f4e;>

        <div class="text-light">
            <table>
                <tr>
                    <th><img src="{{asset('img/LOGO.png')}}" alt="" width="80" height="80" class="text-center"></th>
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
    

    <!-- Table Untuk agenda besok -->
    <div class="row">
        <div class="col-6">
            <center>
            {{-- <div class="media">
                <div class="media-body">
                    <iframe width="620" height="430" src="{{asset('media/cover.mp4')}}" frameborder="0" allowfullscreen >
                    </iframe>
                </div>
            </div> --}}

            <video playsinline autoplay muted loop style="margin: 50px; width: 90%; height: 90%; display: block; background-color: #fff;">
            <source src="{{asset('media/Gratifikasi.mp4')}}" type="video/mp4"></video>
            </center>
        </div>
        <div class="col-6">
            <div class="text-light" style=background-color:#2f4f4e;>
                <marquee behavior="alternate" direction="right">
                    <h4><strong>AGENDA KEGIATAN HARI INI</strong></h4>
                </marquee>
            </div>

            <div class="owl-carousel owl-theme">
                @foreach ($data_agenda as $index => $agenda)
                <div class="item"><h5>
                    {{$agenda->nama}} <br> 
                    {{$agenda->tanggal}} <br> 
                    {{$agenda->waktu}} <br> 
                    {{$agenda->tempat}} <br> 
                    {{$agenda->pelaksana}}
                </h5></div>
                @endforeach
            </div>
                <br>
                
            <div class="text-light" style=background-color:#2f4f4e;>
                <marquee behavior="alternate" direction="left">
                    <h4><strong>AGENDA KEGIATAN BESOK</strong></h4>
                </marquee>
            </div>

            <div class="owl-carousel owl-theme">
                @foreach ($data_besok as $index => $agenda)
                <div class="item"><h5>
                    {{$agenda->nama}} <br> 
                    {{$agenda->tanggal}} <br> 
                    {{$agenda->waktu}} <br> 
                    {{$agenda->tempat}} <br> 
                    {{$agenda->pelaksana}}
                </h5></div>
                @endforeach
            </div>
            <br>
        </div>


            <!-- Footer -->
        <div class="card-footer text-light " style=background-color:#2f4f4e;>
            <marquee behavior="" direction="">
                <h4 style="margin-top: 5px;"><strong>TERIMA KASIH UNTUK TETAP MEMAKAI MASKER, MENJAGA JARAK, DAN TIDAK MEMBUAT KERUMUNAN DI DISPERDAGIN KABUPATEN CIREBON</strong></h4>
            </marquee>
        </div>

    </div>
    {{-- <table class="table table-striped table-hover" style="vertical-align: middle"> --}}
        {{-- Judul tabel  --}}
        {{-- <tr>
            <th>No.</th>
            <th>Nama Kegiatan</th>
            <th>Tanggal Pelaksanaan</th>
            <th>Waktu Pelaksanaan</th>
            <th>Tempat Kegiatan</th>
            <th>Pelaksana Kegiatan</th>
        </tr> --}}
        {{-- Perulangan  --}}
        {{-- @foreach ($data_besok as $index=>$agenda) --}}
        {{-- Pengambilan data dari database  --}}
        {{-- <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $agenda->nama }}</td>
            <td>{{ $agenda->tanggal }}</td>
            <td>{{ $agenda->waktu }}</td>
            <td>{{ $agenda->tempat }}</td>
            <td>{{ $agenda->pelaksana }}</td>
        </tr> --}}
        {{-- @endforeach --}}
    {{-- </table> --}}

    {{-- {{$data_agenda->links() }} --}}


    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
  <script>
jQuery(document).ready(function($){
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop:true,
        margin:10,
        dots:false,
        // center:true,
        autoplay:true,
        autoplayTimeout:7000,
        autoplayHoverPause:true,
        responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:1
        }
    }
    });
    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[7000])
    })
    $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
    })
  })
  </script>

</html>