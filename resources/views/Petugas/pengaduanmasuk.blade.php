<!-- resources/views/Petugas/pengaduanmasuk.blade.php -->
@extends('layouts.petugas')

@section('content')
<div class="container">
    <h1>Pengaduan Masuk</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Isi Pengaduan</th>
                    <th>Gambar</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengaduans as $index => $pengaduan)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $pengaduan->user->name }}</td>
                    <td>{{ $pengaduan->user->nik }}</td>
                    <td>{{ $pengaduan->isi_pengaduan }}</td>
                    <td>
                        @if($pengaduan->upload_gambar)
                            <img src="{{ asset($pengaduan->upload_gambar) }}" alt="Gambar Pengaduan" class="img-fluid" style="max-width: 100px;">
                        @else
                            <img src="{{ asset('masyarakat/img/logo.png') }}" alt="Gambar Pengaduan" class="img-fluid" style="max-width: 100px;">
                        @endif
                    </td>
                    <td>{{ $pengaduan->status }}</td>
                    <td>
                        <div class="btn-group-vertical" role="group">
                            <a href="{{ route('pengaduan.balas.form', ['id' => $pengaduan->id]) }}" class="btn btn-primary btn-sm">Balas</a>
                            <a href="{{ route('pengaduan.edit', ['id' => $pengaduan->user_id]) }}" class="btn btn-warning btn-sm mt-2">Edit</a>
                            <form action="{{ route('pengaduan.delete', ['id' => $pengaduan->user_id]) }}" method="POST" class="mt-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
