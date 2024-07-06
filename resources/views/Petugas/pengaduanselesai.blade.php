@extends('layouts.petugas')

@section('content')
<div class="container">
    <h1>Pengaduan Selesai</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
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
                        <td>{{ Str::limit($pengaduan->isi_pengaduan, 100) }}</td>
                        <td>
                            @if($pengaduan->upload_gambar)
                                <img src="{{ $pengaduan->upload_gambar }}" alt="Gambar Pengaduan" class="img-thumbnail" style="max-width: 100px;">
                            @else
                                <img src="{{ asset('masyarakat/img/logo.png') }}" alt="Gambar Pengaduan" class="img-thumbnail" style="max-width: 100px;">
                            @endif
                        </td>
                        <td>{{ $pengaduan->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
