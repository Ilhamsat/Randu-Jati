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
                    <h3 class="box-title">Tabel Supplier</h3>
                </div>
                <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No.HP</th>
                    <th scope="col">Jenis Supply barang</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no=1; @endphp
                @foreach($data as $i=>$value)

                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$value->nama}}</td>
                        <td>{{$value->alamat}}</td>
                        <td>{{$value->no_hp}}</td>
                        <td>{{$value->jenis_supply}}</td>
                        <td>
                            <form action="{{route('supplier.destroy',$value->id)}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <a href="{{route('supplier.edit',$value->id)}}" class="btn btn-sm btn-primary">Edit</a>
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
