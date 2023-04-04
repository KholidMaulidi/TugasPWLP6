@extends('master')

@section('pengalaman')

<div class="container mt-5">
   <div class="row justify-content-center align-items-center">
      <div class="card" style="width: 24rem;">
         <div class="card-header">
            Edit Data Nasabah
         </div>
         <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
               <strong>Whoops!</strong> There were some problems with your input.<br><br>
               <ul>
                  @foreach ($errors->all() as $error) 
                     <li>{{ $error }}</li>
                     @endforeach
               </ul>
            </div>
         @endif
         <form method="post" action="{{ route('posts.update', $Post->no_rekening) }}" id="myForm">
         @csrf
         @method('PUT')
            <div class="form-group">
               <label for="no_rekening">No Rekening</label>
               <input type="text" name="no_rekening" class="formcontrol" id="no_rekening"value="{{ $Post->no_rekening }}" ariadescribedby="no_rekening">
            </div>
            <div class="form-group">
               <label for="nama">nama</label>
               <input type="nama" name="nama" class="formcontrol" id="nama"value="{{ $Post->nama }}" ariadescribedby="nama">
            </div>
            <div class="form-group">
               <label for="alamat">alamat</label>
               <input type="text" name="alamat" class="formcontrol" id="alamat"value="{{ $Post->alamat }}" ariadescribedby="alamat">
            </div>
            <div class="form-group">
               <label for="jenis_tabungan">jenis tabungan</label>
               <input type="text" name="jenis_tabungan" class="formcontrol" id="jenis_tabungan"value="{{ $Post->jenis_tabungan }}" ariadescribedby="jenis_tabungan">
            </div>
            <div class="form-group">
               <label for="saldo">saldo</label>
               <input type="saldo" name="saldo" class="formcontrol" id="saldo"value="{{ $Post->saldo }}" ariadescribedby="saldo">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
         </form>
         </div>
      </div>
   </div>
</div>
@endsection
