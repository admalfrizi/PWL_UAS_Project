@extends('navbar/navbar_admin')
@section('isi')

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/edit.css'); }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<div class="card uper edit_body">
    <div class="card-header">
        Edit Data
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{ url('barang-update/'.$barangs->id ) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="country_name">Nama Barang:</label>
                <input type="text" value="{{ $barangs->nama }}" class="form-control" name="nama" />
            </div>
            <div class="form-group">
                <label for="cases">Harga:</label>
                <input type="text" value="{{ $barangs->price }}" class="form-control" name="price" />
            </div>
            <div class="form-group mb-4">
                <label for="exampleFormControlTextarea1">Deskripsi :</label>
                <textarea class="form-control" name="description">{{ $barangs->description }}</textarea>
            </div>
            <div class="form-group mt-4 mb-4">
                <label class="input-group-text" for="inputGroupFile01">Upload Foto Gambar</label>
                <input accept="image/*" value="{{ $barangs->barang_pic }}" type="file" name="barang_pic" class="form-control" id="barang_pic">
            </div>
            <div class="form-group mt-4">
                <img src="{{ asset('/images/databarang/'.$barangs->barang_pic) }}" class="img-fluid img-thumbnail" width="150">
            </div>
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </form>
    </div>
</div>
@endsection