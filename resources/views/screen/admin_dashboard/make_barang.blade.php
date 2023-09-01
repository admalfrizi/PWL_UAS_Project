@extends("navbar/navbar_admin")

@section('isi')
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/create.css'); }}">
</head>
<div class="card uper create_body">
    <div class="card-header">
        Tambah Barang
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
        <form method="post" action="{{ route('barang.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="country_name">Nama Barang</label>
                <input type="text" value="{{ old('nm_barang') }}" class="form-control" name="nm_barang" />
            </div>
            <div class="form-group">
                <label for="cases">Harga</label>
                <input type="text" value="{{ old('price') }}"  class="form-control" name="price" />
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Deskripsi</label>
                <textarea class="form-control" value="{{ old('description') }}"  name="description"></textarea>
            </div>
            <div class="form-group mt-4 mb-4">
                <label class="input-group-text" for="inputGroupFile01">Upload Foto Gambar</label>
                <input accept="image/" value="{{ old('pic_barang') }}" type="file" name="pic_barang" class="form-control" id="pic_barang">
            </div>
            
            <button type="submit" class="btn btn-primary mt-4">Tambahkan</button>
        </form>
    </div>
</div>
@endsection