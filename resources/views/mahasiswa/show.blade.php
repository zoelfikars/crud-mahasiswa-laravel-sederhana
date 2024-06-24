@extends('layout')
@section('content')
<div class="wrapper my-5 d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header d-flex align-items-center justify-content-center gap-3">
            <a class="btn btn-primary btn-sm rounded-pill" href="{{ route('mahasiswa.index') }}"><i class="bi bi-chevron-left"></i></a>
            <h4>Detail Mahasiswa</h4>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <strong>Nama : </strong><span>{{ $mahasiswa->nama }}</span>
            </li>
            <li class="list-group-item">
                <strong>Kelas : </strong>
                <span>{{ $mahasiswa->kelas }}</span>
            </li>
        </ul>
    </div>
</div>
@endsection