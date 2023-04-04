@extends('master')

@section('pengalaman')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Data Nasabah
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>No Rekening: </b>{{ $Post->no_rekening }}</li>
                        <li class="list-group-item"><b>Nama: </b>{{ $Post->nama }}</li>
                        <li class="list-group-item"><b>Alamat:</b>{{ $Post->alamat }}</li>
                        <li class="list-group-item"><b>Jenis Tabungan:</b>{{ $Post->jenis_tabungan }}</li>
                        <li class="list-group-item"><b>Saldo: </b>{{ $Post->saldo }}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt3" href="{{ route('posts.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
