@extends('navbar/navbar_user')
@section('isi-home')

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/cart.css'); }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    @if(empty($cart) || count($cart) == 0)
    <div class="peringatan">
        <h4>Keranjangnya Kosong</h4>
    </div>
    @else
    <div class='container cart_body'>
        <div class='Menu'>
            <div class='side-carts'>
                <div class='Title'>
                    <h3>Carts</h3>
                </div>
                <div class='isi-carts'>
                    <table class="table table-bordered">
                        <tbody>
                            @php
                            $no = 1;
                            $total = 0;
                            @endphp
                            @foreach($cart as $ct => $val)
                            @php
                            $subtotal = $val["price"] * $val["jumlah"];
                            @endphp
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$val["nama"]}}</td>
                                <td>Rp. @currency($val["price"])</td>
                                <td>{{ $val["jumlah"] }} pcs</td>
                                <td>Rp. @currency($subtotal) </td>
                                <td>
                                    <a href="{{url('/cart/tambah_lagi/'.$ct)}}" class="btn btn-sm btn-primary">Tambah Lagi</a>
                                    @if($val["jumlah"] <= 1) <a href="{{url('/cart/hapus/'.$ct)}}" class="btn btn-sm btn-danger">Hapus</a>
                                        @else
                                        <a href="{{url('/cart/kurangi/'.$ct)}}" class="btn btn-sm btn-danger">Hapus</a>
                                        @endif
                                </td>
                            </tr>
                            <?php
                            $total += $subtotal;
                            ?>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mb-3">
                        <h4>Total Harga : Rp. @currency($total)</h4>
                    </div>
                    <div class='isi'>
                        <a href="{{ url('/transaksi/tambah') }}" class='btn btn-primary'>
                            Konfirmasi Pembelian
                        </a>
                        <a href="{{url('/cart/hapus')}}" class="btn btn-danger">Hapus Semua Isi</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endif
</body>
@endsection