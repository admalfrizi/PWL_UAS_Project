<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nm_barang', 'price', 'description', 'created_at', 'updated_at', 'pic_barang'
    ];

    static function detail_produk($id)
    {
        $data = Barang::where("id", $id)->first();

        return $data;
    }
}
