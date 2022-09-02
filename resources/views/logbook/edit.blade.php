<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Data Tamu</title>
</head>
<body>
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <div class="text-center display-4">
                    Edit Data Tamu
                </div>
                <form method="POST" action="{{route('logbook.update', $data_tamu->id)}}">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="id" value="{{$data_tamu->id}}">
                      <div class="mb-3">
                        <label for="" class="form-label">Tanggal</label>
                        <input name="tanggal" value="{{$data_tamu->tanggal}}" type="date" class="form-control" placeholder="Input tanggal">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Nama Lengkap</label>
                        <input name="nama" value="{{$data_tamu->nama}}" type="text" class="form-control" placeholder="Input nama lengkap">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Alamat</label>
                        <input name="alamat" value="{{$data_tamu->alamat}}" type="text" class="form-control" placeholder="Input alamat">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Bidang Tujuan</label>
                        <input name="tujuan" value="{{$data_tamu->tujuan}}" type="text" class="form-control" placeholder="Input bidang tujuan">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Keperluan</label>
                        <input name="keperluan" value="{{$data_tamu->keperluan}}" type="text" class="form-control" placeholder="Input Keperluan">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Telepon</label>
                        <input name="telp" value="{{$data_tamu->telp}}" type="text" class="form-control" placeholder="Input telepon">
                      </div>
                      <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
