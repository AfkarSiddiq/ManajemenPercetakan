@extends('admin.index')
@section('content')
<h3>Form Barang</h3>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container px-5 my-5">
    <form method="POST" action="{{ route('barang.store') }}" id="contactForm" data-sb-form-api-token="API_TOKEN">
        @csrf
        <div class="form-floating mb-3">
            <input class="form-control" name="kode" value="" id="kodebarang" type="text" placeholder="Kode barang" data-sb-validations="required" />
            <label for="kodebarang">Kode barang</label>
            <div class="invalid-feedback" data-sb-feedback="kodebarang:required">Kode barang is required.</div>
        </div>
        @endif
        <div class="container px-5 my-5">
            <form method="POST" action="{{ route('barang.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <input class="form-control" name="kode" value="" id="kodebarang" type="text" placeholder="Kode barang" data-sb-validations="required" />
                    <label for="kodebarang">Kode barang</label>
                    <div class="invalid-feedback" data-sb-feedback="kodebarang:required">Kode barang is required.</div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" name="nama_barang" value="" id="barang" type="text" placeholder="barang" data-sb-validations="required" />
                    <label for="barang">barang</label>
                    <div class="invalid-feedback" data-sb-feedback="barang:required">barang is required.</div>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" name="kategori" aria-label="Kategori barang">
                        <option value="">-- Pilih Kategori barang --</option>
                        @foreach ($ar_kategori as $k)
                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                        @endforeach
                    </select>
                    <label for="kategoribarang">Kategori barang</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" name="harga" value="" id="harga" type="text" placeholder="Harga" data-sb-validations="required" />
                    <label for="harga">Harga</label>
                    <div class="invalid-feedback" data-sb-feedback="harga:required">Harga is required.</div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" name="stok" value="" id="stok" type="text" placeholder="Stok" data-sb-validations="required" />
                    <label for="stok">Stok</label>
                    <div class="invalid-feedback" data-sb-feedback="stok:required">Stok is required.</div>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" name="satuan" value="" id="satuan" type="text" placeholder="Satuan" data-sb-validations="required" />
                    <label for="satuan">Satuan</label>
                    <div class="invalid-feedback" data-sb-feedback="satuan:required">Satuan is required.</div>
                </div>
                <!-- UPLOAD FOTO -->
                <div class="form-floating mb-3">
                    <input class="form-control" name="foto" value="" id="foto" type="file" placeholder="Foto" data-sb-validations="required" />
                    <label for="foto"></label>
                    <div class="invalid-feedback" data-sb-feedback="foto:required">Foto is required.</div>
                </div>
                <button class="btn btn-primary" name="proses" value="simpan" id="simpan" type="submit">Simpan</button>
                <a href="{{ url('/barang') }}" class="btn btn-info">Batal</a>

            </form>
        </div>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        @endsection