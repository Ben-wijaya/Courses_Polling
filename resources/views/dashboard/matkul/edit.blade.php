@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit User</h1>
</div>

<form method="POST" action="/dashboard/matkul/{{ $matkul->id }}">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="kode" class="form-label">Kode Program Studi</label>
      <input type="text" class="form-control @error('prodis_id') is-invalid @enderror"
      id="prodis_id" name="prodis_id" placeholder="{{ auth()->user()->prodi_id }} - {{ auth()->user()->prodi->name }}" required value="{{ $matkul->prodi->id }}" readonly>
      @error('prodis_id')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control @error('kode') is-invalid @enderror"
      id="kode" name="kode" placeholder="Contoh: Web Dasar" required value="{{ old('kode', $matkul->kode) }}">
      @error('kode')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror"
      id="nama" name="nama" placeholder="Contoh: Web Dasar" required value="{{ old('nama', $matkul->nama) }}">
      @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection