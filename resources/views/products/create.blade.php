@extends('layouts.app')

@section('content')
    <h2>Tambah Produk Baru</h2>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="input-group mb-3 row">
            <label for="name" class="col-2">Nama Produk:</label>
            <input type="text" class="form-control col-10" name="name" id="name" required>
        </div>
        <div class="input-group mb-3 row">
            <label for="name" class="col-2">Harga:</label>
            <input type="number" class="form-control col-10" name="price" id="price" required>
        </div>
        <div class="input-group mb-3 row">
            <label for="name" class="col-2">Stock:</label>
            <input type="number" class="form-control col-10" name="stock" id="stock" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <a href="{{ route('products.index') }}" class="btn btn-danger">Kembali</a>
    @endsection