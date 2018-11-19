@extends('welcome')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Supplier</h1>
            <hr>
            <form action="{{ route('supplier.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Supplier:</label>
                    <input type="text" class="form-control" id="usr" name="nama">
                </div>

                <div class="form-group">
                    <label for="isi">Alamat</label>
                    <input type="text" class="form-control" id="username" name="alamat">
                </div>
                <div class="form-group">
                    <label for="password">No.Hp</label>
                    <input type="number" class="form-control" id="password" name="noHp">
                </div>
                <div class="form-group">
                    <label for="password">Jenis Supply Barang</label>
                    <input type="text" class="form-control" id="password" name="jenisSupply">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
