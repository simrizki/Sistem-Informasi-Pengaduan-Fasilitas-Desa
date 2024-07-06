@extends('layouts.petugas')

@section('content')
<div class="container">
    <h1>Balas Pengaduan</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('pengaduan.balas', ['id' => $pengaduan->id]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="proses">Proses</option>
                <option value="tolak">Tolak</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="balasan">Balasan</label>
            <textarea name="balasan" id="balasan" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Kirim</button>
    </form>
</div>

<style>
    /* Tambahkan padding pada container untuk tampilan mobile */
    @media (max-width: 576px) {
        .container {
            padding: 15px;
        }

        h1 {
            font-size: 1.5rem;
        }

        .form-group label {
            font-size: 1rem;
        }

        .form-group select,
        .form-group textarea,
        .btn {
            font-size: 1rem;
        }
    }

    /* Tambahkan padding pada container untuk tampilan tablet */
    @media (min-width: 577px) and (max-width: 768px) {
        .container {
            padding: 20px;
        }

        h1 {
            font-size: 1.75rem;
        }

        .form-group label {
            font-size: 1.1rem;
        }

        .form-group select,
        .form-group textarea,
        .btn {
            font-size: 1.1rem;
        }
    }
</style>
@endsection
