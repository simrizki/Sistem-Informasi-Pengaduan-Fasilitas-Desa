<!-- resources/views/Admin/pengaduanditolak.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Pengaduan Ditolak</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Isi Pengaduan</th>
                <th>Gambar</th>
                <th>Status</th>
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
                            <img src="{{ asset($pengaduan->upload_gambar) }}" alt="Gambar Pengaduan" width="100">
                        @else
                            <img src="{{ asset('masyarakat/img/logo.png') }}" alt="Gambar Pengaduan" width="100">
                        @endif
                    </td>
                    <td>{{ $pengaduan->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
