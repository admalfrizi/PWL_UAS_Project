<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $table = "detail_transaksi";
    protected $primaryKey = "id_detail_transaksi";

    protected $fillable = [
        'id_header_transaksi', 'id_barang', 'jumlah', 'total_harga'
    ];

    static function add_detail_transaksi($id, $id_header_transaksi, $jumlah, $total)
    {
        DetailTransaksi::create(
            [
                "id_barang" => $id,
                "id_header_transaksi" => $id_header_transaksi,
                "jumlah" => $jumlah,
                "total_harga" => $total,
            ]
        );
    }
}
