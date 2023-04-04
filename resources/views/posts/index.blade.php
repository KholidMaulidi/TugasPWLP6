
@extends('master')

@section('pengalaman')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Nasabah</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{route('posts.create')}}">Input Pasien</a>
        </div>
        <div class="col-md-6 mt-3">
            <form action="{{ url('posts')}}" method="get">
                <input type="search" class="form-control" name ="search" value="{{Request::get('search')}}" id="inputEmail" placeholder="Search Here">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>No Rekening</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Tabungan</th>
        <th>Saldo</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($posts as $Post)
    <tr>
        <td>{{ $Post->no_rekening }}</td>
        <td>{{ $Post->nama }}</td>
        <td>{{ $Post->alamat }}</td>
        <td>{{ $Post->jenis_tabungan }}</td>
        <td>{{ $Post->saldo }}</td>
        <td>
            <form action="{{ route('posts.destroy',$Post->no_rekening)}}" method="POST">
                <a class="btn btn-info" href="{{route('posts.show',$Post->no_rekening)}}">Show</a>
                <a class="btn btn-primary" href="{{route('posts.edit',$Post->no_rekening)}}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{$posts->links()}}
@endsection