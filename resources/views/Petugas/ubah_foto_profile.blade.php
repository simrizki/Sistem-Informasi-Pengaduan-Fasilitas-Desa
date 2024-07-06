@extends('layouts.petugas')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Ubah Foto Profil') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('petugas.update_profile_photo') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3 row">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" value="{{ Auth::user()->email }}" readonly>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="nik" class="col-md-4 col-form-label text-md-end">{{ __('NIK') }}</label>

                                <div class="col-md-6">
                                    <input id="nik" type="text" class="form-control" value="{{ Auth::user()->nik }}" readonly>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Telepon') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control" value="{{ Auth::user()->phone }}" readonly>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="profile_photo" class="col-md-4 col-form-label text-md-end">{{ __('Foto Profil') }}</label>

                                <div class="col-md-6">
                                    <input id="profile_photo" type="file" class="form-control @error('profile_photo') is-invalid @enderror" name="profile_photo" accept="image/*">
                                    
                                    @error('profile_photo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Simpan Perubahan') }}
                                    </button>
                                    <a href="{{ route('petugas.dashboard') }}" class="btn btn-secondary">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
