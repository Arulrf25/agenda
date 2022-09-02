<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Agenda</title>
</head>
<body>
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <div class="text-center display-4">
                    Edit Data
                </div>
                <form method="POST" action="{{route('agenda.update', $data_agenda->id)}}">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="id" value="{{$data_agenda->id}}">
                      <div class="mb-3">
                        <label for="" class="form-label">Nama Kegiatan</label>
                        <input name="nama" value="{{$data_agenda->nama}}" type="text" class="form-control" placeholder="Input nama kegiatan">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Tanggal Pelaksanaan</label>
                        <input name="tanggal" value="{{$data_agenda->tanggal}}" type="date" class="form-control" placeholder="Input tanggal pelaksanaan">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Waktu Pelaksanaan</label>
                        <input name="waktu" value="{{$data_agenda->waktu}}" type="text" class="form-control" placeholder="Input waktu pelaksanaan">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Tempat Kegiatan</label>
                        <input name="tempat" value="{{$data_agenda->tempat}}" type="text" class="form-control" placeholder="Input tempat kegiatan">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Pelaksana Kegiatan</label>
                        <input name="pelaksana" value="{{$data_agenda->pelaksana}}" type="text" class="form-control" placeholder="Input Pelaksana Kegiatan">
                      </div>
                      <button type="submit" class="btn btn-primary">Edit Data</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
