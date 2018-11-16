@extends('welcome')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit User</h1>
            <hr>
            @foreach($data as $datas)
                <form action="{{ route('user.update', $datas->id) }}" method="post">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{$datas->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{$datas->username}}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{$datas->password}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$datas->email}}">
                    </div>
                    <div class="form-group">
                        <label for="nohp">Password:</label>
                        <input type="number" class="form-control" id="nohp" name="nohp" value="{{$datas->nohp}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Password:</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{$datas->alamat}}">
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
