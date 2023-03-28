@extends('master')

@section('parent')
@parent
@endsection

@section('selamat')
<script>
    alert("Selamat Datang");
</script>
<div class="card card-primary card-outline">
    <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
        <div class="card-header">
            <h4 class="card-title w-100">
                <center>Selamat Datang</center>
            </h4>
        </div>
    </a>
</div>
@endsection