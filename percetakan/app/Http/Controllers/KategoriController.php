<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang; //panggil model
use App\Models\Kategori; //panggil model
use Illuminate\Support\Facades\DB; // jika pakai query builder
use Illuminate\Database\Eloquent\Model; //jika pakai eloquent

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ar_kategori = DB::table('kategori')
            ->orderBy('kategori.id', 'desc')
            ->get();

        return view('kategori.index', compact('ar_kategori'), ['title' => 'Data Kategori']);
    }

    public function dataPilihan()
    {
        $ar_pilihan = Kategori::all(); //eloquent
        return view('landingpage.about', compact('ar_pilihan'), ['title' => 'Data Kategori']);
    }

    public function create()
    {
        //ambil master untuk dilooping di select option
        $ar_kategori = Kategori::all();
        //arahkan ke form input data
        return view('kategori.form', compact('ar_kategori'), ['title' => 'Input Kategori Baru']);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //proses input kategori dari form
        $request->validate(
            [
                'nama' => 'required|max:45',

            ],
            //custom pesan errornya
            [
                'nama.required' => 'Nama Wajib Diisi',
                'nama.max' => 'Nama Maksimal 45 karakter',
            ]
        );
        //Kategori::create($request->all());

        //lakukan insert data dari request form
        DB::table('kategori')->insert(
            [
                'nama' => $request->nama,
            ]
        );

        return redirect()->route('kategori.index')
            ->with('success', 'Data Kategori Baru Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $rs = Kategori::find($id);
        return view('kategori.detail', compact('rs'), ['title' => 'Detail Kategori']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //ambil master untuk dilooping di select option
        $ar_barang = Barang::all();
        //tampilkan data lama di form
        $row = Kategori::find($id);
        return view('kategori.form_edit', compact('row', 'ar_barang'), ['title' => 'Ubah Data Kategori']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //proses input kategori dari form
        $request->validate(
            [
                'nama' => 'required|max:45',

            ],
            //custom pesan errornya
            [
                'nama.required' => 'Nama Wajib Diisi',
                'nama.max' => 'Nama Maksimal 45 karakter',
            ]
        );
        //Kategori::create($request->all());

        //lakukan insert data dari request form
        DB::table('kategori')->where('id', $id)->update(
            [

                'nama' => $request->nama,
            ]
        );

        return redirect('/kategori' . '/' . $id)
            ->with('success', 'Data Kategori Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kategori::where('id', $id)->delete();
        return redirect()->route('kategori.index')
            ->with('success', 'Data Kategori Berhasil Dihapus');
    }

    public function batal()
    {
        $ar_kategori = DB::table('kategori')
            ->orderBy('kategori.id', 'desc')
            ->get();

        return view('kategori.index', compact('ar_kategori'));
    }
}
