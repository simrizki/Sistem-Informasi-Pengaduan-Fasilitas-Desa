@extends('layouts.petugas')

@section('content')
<div class="container">
    <h1>Pengaduan dalam Proses</h1>

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
                                <img src="{{ asset($pengaduan->upload_gambar) }}" alt="Gambar Pengaduan" class="img-fluid thumbnail">
                            @else
                                <img src="{{ asset('masyarakat/img/logo.png') }}" alt="Gambar Pengaduan" class="img-fluid thumbnail">
                            @endif
                        </td>
                        <td>{{ $pengaduan->status }}</td>
                        <td>
                            <div class="btn-group-vertical" role="group">
                                <form action="{{ route('pengaduan.selesai', ['id' => $pengaduan->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-success btn-sm">Selesai</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
    /* CSS tambahan untuk memastikan gambar tetap responsif */
    .thumbnail {
        max-width: 100px;
        height: auto;
    }

    /* Menyesuaikan tampilan di perangkat kecil */
    @media (max-width: 767px) {
        .container {
            padding-left: 15px;
            padding-right: 15px;
        }

        .btn-group-vertical {
            width: 100%;
        }

        .btn-group-vertical .btn {
            width: 100%;
            margin-bottom: 5px;
        }
    }
</style>
@endsection
