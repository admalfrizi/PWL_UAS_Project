<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{

    public function index()
    {
        $barangs = Barang::all();

        return view('screen.admin_dashboard.dashboard', compact('barangs'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'nm_barang' => 'required',
            'price' => 'required',
            'description' => 'required',
            'pic_barang' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $request->file('pic_barang');
        $image = $path->getClientOriginalName();
        $path->move(base_path('public/images/databarang'), $image);

        $input = [
            'nm_barang' => $request->nm_barang,
            'price' => $request->price,
            'description' => $request->description,
            'pic_barang' => $image,
        ];

        Barang::create($input);
        return redirect('dashboard')->with('success', 'Barang Telah Di Tambahkan');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $barangs = Barang::find($id);
        return view('screen.admin_dashboard.edit', compact('barangs'));
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $barang->nm_barang = $request->input('nm_barang');
        $barang->price = $request->input('price');
        $barang->description = $request->input('description');

        if ($request->hasFile('pic_barang')) {
            $destination = '/images/databarang' . $barang->pic_barang;
            if (File::exists($barang)) {

                File::delete($destination);
            }

            $file = $request->file('pic_barang');
            $extension = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/images/databarang/', $extension);
            $barang->pic_barang = $extension;
        }

        $barang->update();

        return redirect('dashboard')->with('success', 'Data anda Telah diubah');
    }

    public function destroy($id)
    {
        $hapuskan = Barang::findOrFail($id);
        $destination = '/images/databarang' . $hapuskan->pic_barang;

        if (File::exists($destination)) {

            File::delete($destination);
        }

        $hapuskan->delete();

        return redirect('dashboard')->with('success', 'Data anda Telah Terhapus');
    }
}
