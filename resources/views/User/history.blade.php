@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Histori Pengaduan</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <style>
        .badge-warning {
            background-color: #ffc107; /* Warna kuning */
            color: #000; /* Warna teks hitam */
        }

        .badge-info {
            background-color: #17a2b8; /* Warna biru */
            color: #fff; /* Warna teks putih */
        }

        .badge-success {
            background-color: #28a745; /* Warna hijau */
            color: #fff; /* Warna teks putih */
        }

        .badge-danger {
            background-color: #dc3545; /* Warna merah */
            color: #fff; /* Warna teks putih */
        }

        .badge-secondary {
            background-color: #6c757d; /* Warna abu-abu */
            color: #fff; /* Warna teks putih */
        }

        /* CSS untuk gambar thumbnail */
        .thumbnail {
            max-width: 100px;
            max-height: 100px;
        }

        @media (max-width: 768px) {
            .table thead {
                display: none;
            }
            .table tbody tr {
                display: block;
                margin-bottom: 10px;
            }
            .table tbody td {
                display: block;
                text-align: right;
                font-size: 14px;
                border-top: none;
                position: relative;
                padding-left: 50%;
            }
            .table tbody td:before {
                content: attr(data-label);
                position: absolute;
                left: 10px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                text-align: left;
                font-weight: bold;
            }
        }
    </style>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Isi Pengaduan</th>
                    <th>Gambar</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Balasan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($histori as $pengaduan)
                <tr>
                    <td data-label="Isi Pengaduan">{{ $pengaduan->isi_pengaduan }}</td>
                    <td data-label="Gambar">
                        @if($pengaduan->upload_gambar)
                            <img src="{{ asset($pengaduan->upload_gambar) }}" alt="Gambar Pengaduan" class="thumbnail">
                        @else
                            <span class="badge badge-secondary">Tidak Ada Gambar</span>
                        @endif
                    </td>
                    <td data-label="Tanggal">{{ $pengaduan->created_at->format('d-m-Y') }}</td>
                    <td data-label="Status">
                        @if($pengaduan->status == 'menunggu')
                            <span class="badge badge-warning">Menunggu Tanggapan</span>
                        @elseif($pengaduan->status == 'proses')
                            <span class="badge badge-info">Dalam Proses</span>
                        @elseif($pengaduan->status == 'selesai')
                            <span class="badge badge-success">Selesai</span>
                        @elseif($pengaduan->status == 'tolak')
                            <span class="badge badge-danger">Ditolak</span>
                        @endif
                    </td>
                    <td data-label="Balasan">
                        @if($pengaduan->balasans->isNotEmpty())
                            @foreach($pengaduan->balasans as $balasan)
                                <div class="alert alert-info">
                                    <p><strong>Balasan:</strong> {{ $balasan->isi_balasan }}</p>
                                </div>
                            @endforeach
                        @else
                            <div class="alert alert-warning">
                                <p><strong>Belum ada balasan untuk pengaduan ini.</strong></p>
                            </div>
                        @endif
                    </td>                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
