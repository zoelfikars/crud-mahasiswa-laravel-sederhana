@extends('layout')
@section('content')
<div class="wrapper my-5 d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header d-flex align-items-center justify-content-center gap-3">
            <a class="btn btn-primary btn-sm rounded-pill" href="{{ route('mahasiswa.index') }}"><i class="bi bi-chevron-left"></i></a>
            <h4>Edit Data Mahasiswa</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <strong>Whoops!</strong> Sepertinya terjadi kekeliruan dari input yang anda masukkan.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama" class="form-label"><strong>Nama:</strong></label>
                    <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control" id="nama" placeholder="Nama">
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label"><strong>Kelas:</strong></label>
                    <input type="text" name="kelas" value="{{ $mahasiswa->kelas }}" class="form-control" id="kelas" placeholder="Kelas">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection