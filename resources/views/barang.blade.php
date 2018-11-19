@extends('welcome')
@section('content')
    <section class="main-section">
        <div class="content">
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Tabel Barang</h3>
                </div>
                <div class="box-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Jenis Komposisi</th>
                    <th>Harga Barang</th>
                    <th>Jumlah Stok</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $d)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->jenisKomposisi}}</td>
                        <td>{{$d->harga}}</td>
                        <td>{{$d->stok}}</td>
                        <td>
                            <form action="{{route('barang.destroy', $d->id)}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <a href="{{route('barang.edit',$d->id)}}" class="btn btn-sm btn-primary">Edit</a>
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
    </section>
@endsection
