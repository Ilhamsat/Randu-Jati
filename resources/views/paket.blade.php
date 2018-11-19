@extends('welcome')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Tabel Paket</h3>
                </div>
                <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Paket</th>
                    <th>File</th>
                    <th>Isi Paket</th>
                    <th>Jumlah Barang</th>
                    <th>Harga Paket</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no=1; @endphp
                @foreach($data as $i=>$value)

                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$value->nama}}</td>
                        <td><img src="{{ url('uploads/file/'.$value->file) }}" style=" max-height: 150px;"> </td>
                        <td>{{$value->isi_paket}}</td>
                        <td>{{$value->jml_paket}}</td>
                        <td>{{$value->harga_paket}}</td>
                        <td>
                            <form action="{{route('paket.destroy',$value->id)}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <a href="{{route('paket.edit',$value->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
