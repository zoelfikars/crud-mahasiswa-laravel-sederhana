@extends('layout')
@section('content')
<div class="wrapper my-5 d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header d-flex align-items-center justify-content-center gap-3">
            <h4>Data Mahasiswa</h4>
            <a class="btn btn-primary btn-sm rounded-pill" href="{{ route('mahasiswa.create') }}"><i class="bi bi-plus"></i></a>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
            <div class="alert alert-success mt-3">
                <p>{{ $message }}</p>
            </div>
            @endif
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Kelas</th>
                        <th class="text-center" width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswas as $mahasiswa)
                    <tr>
                        <td class="text-center">{{ $mahasiswa->nama }}</td>
                        <td class="text-center">{{ $mahasiswa->kelas }}</td>
                        <td class="text-center">
                            <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display: inline;">
                                <a class="btn btn-info btn-sm" href="{{ route('mahasiswa.show', $mahasiswa->id) }}"><i class="bi bi-eye"></i></a>
                                <a class="btn btn-primary btn-sm" href="{{ route('mahasiswa.edit', $mahasiswa->id) }}"><i class="bi bi-pencil-square"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection