@extends('welcome')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1 style="text-align: center;">Edit Page</h1>
            <hr>
            <form action="{{ route('paket.update', $data->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
               <div class="form-group">
                    <label for="nama">Nama Paket:</label>
                    <input type="text" class="form-control" id="usr" name="nama" value="{{$data->nama}}">
                </div>

                <div class="form-group">
                    <label for="isi">Isi Paket:</label>
                    <input type="text" class="form-control" id="username" name="isipaket" value="{{$data->isi_paket}}">
                </div>
                <div class="form-group">
                    <label for="password">Jumlah Paket:</label>
                    <input type="number" class="form-control" id="password" name="jmlpaket" value="{{$data->jml_paket}}">
                </div>
                 <div class="form-group">
                    <label for="password">Harga Paket:</label>
                    <input type="number" class="form-control" id="password" name="harga" value="{{$data->harga_paket}}">
                </div>
                <div class="form-group">
                    <label for="email">File:</label>

                    <img src="{{ url('uploads/file/'.$data->file) }} " style=" max-height: 150px;">
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