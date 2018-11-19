@extends('welcome')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1 style="text-align: center;">Edit Page</h1>
            <hr>
            @foreach($data as $datas)
                <form action="{{ route('supplier.update', $datas->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="nama">Supplier:</label>
                        <input type="text" class="form-control" id="usr" name="nama" value="{{$datas->nama}}">
                    </div>

                    <div class="form-group">
                        <label for="isi">Alamat:</label>
                        <input type="text" class="form-control" id="username" name="alamat" value="{{$datas->alamat}}">
                    </div>
                    <div class="form-group">
                        <label for="nohp">No.Hp</label>
                        <input type="number" class="form-control" id="password" name="noHp" value="{{$datas->no_hp}}">
                    </div>
                    <div class="form-group">
                        <label for="jenissupply">Jenis Supply Barang</label>
                        <input type="text" class="form-control" id="password" name="jenisSupply" value="{{$datas->jenis_supply}}">
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
