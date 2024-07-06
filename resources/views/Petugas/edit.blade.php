@extends('layouts.petugas')

@section('content')
<div class="container">
    <h1>Edit Pengaduan</h1>

    <form action="{{ route('pengaduan.update', $pengaduan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="isi_pengaduan">Isi Pengaduan</label>
            <textarea name="isi_pengaduan" id="isi_pengaduan" class="form-control" rows="5" required>{{ $pengaduan->isi_pengaduan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
    </form>
</div>
@endsection
