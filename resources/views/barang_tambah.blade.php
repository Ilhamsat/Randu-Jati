@extends('welcome')
@section('content')
<section class="main-section">
<div class="content">
<h1>Tambah Barang</h1>
<hr>
<form action="{{route ('barang.store')}}" id="formbarang" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group">
    <label for="name">Nama Barang:</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="jenisKomposisi">Jenis Komposisi:</label>
    <select name="jenisKomposisi" form="formbarang">
      <option value="jati">Jati</option>
      <option value="randu">Randu</option>
      <option value="sintetis">Sintetis</option>
    </select>
  </div>
  <div class="form-group">
    <label for="harga">Harga Barang:</label>
    <input type="number" class="form-control" name="harga">
  </div>
  <div class="form-group">
    <label for="stok">Jumlah Stok:</label>
    <input type="number" class="form-control" name="stok">
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-md btn-primary" value="TAMBAH">
  </div>
</form>
</div>
</section>
@endsection
    