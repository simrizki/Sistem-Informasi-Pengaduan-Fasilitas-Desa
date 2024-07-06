@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <style>
                    .card-header {
                        background-color: #007bff;
                        color: white;
                        text-align: center;
                        font-size: 1.5em;
                        font-weight: bold;
                    }

                    .card-body {
                        background-color: #f8f9fa;
                    }

                    .card-body .form-control-plaintext {
                        background-color: #ffffff;
                        border: 1px solid #ced4da;
                        border-radius: 5px;
                        padding: 0.375rem 0.75rem;
                        margin-bottom: 0.5rem;
                    }

                    .card-body img {
                        border: 3px solid #007bff;
                        padding: 5px;
                        border-radius: 50%;
                    }
                </style>
                <div class="card-header">
                    <h4>Profil Pengguna</h4>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        @if ($user->profile_photo)
                            <img src="{{ asset('storage/profile_photos/' . $user->profile_photo) }}" class="rounded-circle" alt="User Avatar" width="150">
                        @else
                            <img src="https://via.placeholder.com/150" class="rounded-circle" alt="User Avatar" width="150">
                        @endif
                    </div>                    
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <p class="form-control-plaintext">{{ $user->name }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <p class="form-control-plaintext">{{ $user->email }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">NIK</label>
                        <div class="col-sm-9">
                            <p class="form-control-plaintext">{{ $user->nik ?? 'N/A' }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Telepon</label>
                        <div class="col-sm-9">
                            <p class="form-control-plaintext">{{ $user->phone ?? 'N/A' }}</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('editProfile') }}" class="btn btn-primary">Edit Profil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
