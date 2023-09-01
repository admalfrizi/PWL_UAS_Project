<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\DetailTransaksi;
use App\Models\HeaderTransaksi;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cart = session("cart");

        return view("screen.cart")->with("cart", $cart);
    }

    public function tambah_ke_cart($id)
    {
        $cart = session()->get("cart",[]);

        $barang = Barang::detail_produk($id);

        if(isset($cart[$id])){

            $cart[$id]['jumlah']++;

        } else {
            $cart[$id] = [
                "nama" => $barang->nama,
                "price" => $barang->price,
                "jumlah" => 1,
            ];
        }
        

        session()->put('cart', $cart);

        return redirect("/keranjang");
    }
    public function tambah_lagi($id)
    {
        $cart = session()->get("cart",[]);

        $barang = Barang::detail_produk($id);
        
        if(isset($cart[$id])){
            $cart[$id]['jumlah']++;

        } else {
            $cart[$id] = [
                "nama" => $barang->nama,
                "price" => $barang->price,
                "jumlah" => 1,
            ];
        }
        
        session()->put('cart', $cart);

        return redirect()->back();
    }

    public function kurangi($id)
    {
        $cart = session()->get("cart",[]);

        $barang = Barang::detail_produk($id);
        
        
        if(isset($cart[$id])){

            $cart[$id]['jumlah']--;

        } else {
            $cart[$id] = [
                "nama" => $barang->nama,
                "price" => $barang->price,
                "jumlah" => -1,
            ];
        }
        
        session()->put('cart', $cart);

        return redirect()->back();
    }

    public function hapus_keranjang($id)
    {

        $cart = session("cart");
        unset($cart[$id]);
        session(["cart" => $cart]);
        return redirect("/keranjang");
    }

    public function hapus_semua()
    {

        $cart = session("cart");
        unset($cart);
        session()->remove("cart");
        return redirect("/keranjang");
    }

    public function tambah_transaksi()
    {
        $cart = session("cart");
        $id_users = Auth::user()->id;
        $id_header_transaksi = HeaderTransaksi::add_header_transaksi($id_users);

        foreach ($cart as $ct => $val) {
            $id = $ct;
            $jumlah = $val['jumlah'];

            $subtotal = $val['price'] * $val['jumlah'];
            $total = 0;
            $total += $subtotal;

            DetailTransaksi::add_detail_transaksi($id, $id_header_transaksi, $jumlah, $total);
        }

        session()->forget("cart");

        return redirect("/keranjang");
    }
}
