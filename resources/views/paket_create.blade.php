@extends('welcome')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Paket</h1>
            <hr>
            <form action="{{ route('paket.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Nama Paket:</label>
                    <input type="text" class="form-control" id="usr" name="nama">
                </div>

                <div class="form-group">
                    <label for="isi">Isi Paket:</label>
                    <input type="text" class="form-control" id="username" name="isipaket">
                </div>
                <div class="form-group">
                    <label for="password">Jumlah Paket:</label>
                    <input type="number" class="form-control" id="password" name="jmlpaket">
                </div>
                 <div class="form-group">
                    <label for="password">Harga Paket:</label>
                    <input type="number" class="form-control" id="password" name="harga">
                </div>
                <div class="form-group">
                    <label for="email">File:</label>
                    <input type="file" class="form-control" id="file" name="file">
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