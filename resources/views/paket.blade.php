@extends('welcome')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>TABEL PAKET</h1><br>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Paket</th>
                    <th scope="col">File</th>
                    <th scope="col">Isi Paket</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Harga Paket</th>
                    <th scope="col">Aksi</th>              
                </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach($data as $i=>$value)
                    
                <tr>
                    <th>{{$no++}}</th>
                    <th>{{$value->nama}}</th>
                     <th><img src="{{ url('uploads/file/'.$value->file) }}" style=" max-height: 150px;"> </th>
                    <th>{{$value->isi_paket}}</th>
                    <th>{{$value->jml_paket}}</th>
                    <th>{{$value->harga_paket}}</th>
                    <th>
                        <form action="{{route('paket.destroy',$value->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <a href="{{route('paket.edit',$value->id)}}" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>                           
                        </form>
                    </th>
                    
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection