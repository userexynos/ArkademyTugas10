<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
    public function index() {
        $data = Produk::all();

        return view('produk.index', compact('data'));
    }

    public function create() {
        return view('produk.tambah_produk');
    }

    public function store(Request $request) {
        $data = $request->all();
        unset($data['_token']);
            
        Produk::insert($data);

        return redirect(route('index'))->with(["success" => "Berhasil menambahkan data produk"]);
    }

    public function delete(Request $request, $id) {
        Produk::findOrFail($id)->delete();

        return redirect(route('index'))->with(["success" => "Berhasil menghapus data produk"]);
    }

    public function edit($id) {
        $data = Produk::find($id);

        return view('produk.edit_produk', compact('data'));
    }

    public function update(Request $request) {
        $data = $request->all();
        unset($data['_token']);
        unset($data['id']);
        
        Produk::findOrFail($request->id)->update($data);

        return redirect(route('index'))->with(["success" => "Berhasil mengubah data produk"]);
    }

    public function detail($id) {
        $data = Produk::findOrFail($id);

        return view('produk.detail', compact('data'));
    }
}
