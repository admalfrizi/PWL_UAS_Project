<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderTransaksi extends Model
{
    use HasFactory;

    protected $table = "header_transaksi";
    protected $primaryKey = "id_header_transaksi";

    protected $fillable = [
        'tgl_transaksi','id_users',
    ]; 

    static function add_header_transaksi($id_users)
    {
        $transaksi = HeaderTransaksi::create(
            [
                "tgl_transaksi" => date("Y-m-d"),
                "id_users" => $id_users,
            ]
        );

        return $transaksi->id_header_transaksi;
    }
}
