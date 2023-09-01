@extends('navbar/navbar_user')

@section('isi-home')
  <head>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/home.css'); }}">
  </head>
  <div class="body">

    <h4>Selamat Datang <b>{{Auth::user()->name}}</b></h4>

    <div>
      <p>Silahkan Pilih Barang Yang Ingin Di Beli</p>
    </div>

    <div class="d-flex justify-content-evenly bd-highlight mb-3">
      @foreach($barangs as $barang)
      <div class="card info" style="width: 18rem;">
        <img src="{{ asset('/images/databarang/'.$barang->barang_pic) }}" class="card-img-top" width="75" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$barang->nm_barang}}</h5>
          <h6 class="card-title">Rp. @currency($barang->price)</h6>
          <p class="card-text">{{$barang->description}}</p>
          <form action="{{ url('/cart/tambah/' .$barang->id) }}" method="get">
            @csrf
            <input type="hidden" name="produk_id" value={{ $barang->id }}>
            <button type="submit" class="btn btn-primary">Tambah Ke Keranjang</button>
          </form>
        </div>
      </div>
      @endforeach
    </div>
    
  </div>
@endsection