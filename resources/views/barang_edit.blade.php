@extends('welcome')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Barang</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('barang.update', $datas->id) }}" method="post" id="formbarang">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="name">Nama Barang:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $datas->name }}">
                </div>
                <div class="form-group">
                    <label for="jenisKomposisi">Jenis Komposisi:</label>
                    <select name="jenisKomposisi" form="formbarang">
                        <!-- Option value default -->
                        <option value="jati">Jati</option>
                        <option value="randu">Randu</option>
                        <option value="sintetis">Sintetis</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="number" class="form-control" id="harga" name="harga" value="{{ $datas->harga }}">
                </div>
                <div class="form-group">
                    <label for="barang">Stok:</label>
                    <input type="number" class="form-control" id="stok" name="stok" value="{{ $datas->stok }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection