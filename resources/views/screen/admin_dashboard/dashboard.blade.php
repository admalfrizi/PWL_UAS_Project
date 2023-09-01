@extends('navbar/navbar_admin')

@section('isi')

<head>
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin.css'); }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<div class="body">

  <h4>Selamat Datang Di Dashboard</h4>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar Barang</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Harga Barang</th>
        <th scope="col">Deskripsi Barang</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($barangs as $barang)
      <tr>
        <th scope="row">{{$barang->id}}</th>
        <td><img src="{{ asset('/images/databarang/'.$barang->barang_pic) }}" alt="gambar" width="75"/></td>
        <td>{{$barang->nm_barang}}</td>
        <td>Rp. @currency($barang->price)</td>
        <td>{{$barang->description}}</td>
        <td>
          <div>
            <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-primary mb-3">Edit</a>
          </div>
          <div>
            <form action="{{ route('barang.destroy', $barang->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection