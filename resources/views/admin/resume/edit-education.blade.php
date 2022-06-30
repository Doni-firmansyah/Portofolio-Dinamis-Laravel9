@extends('layouts.dasboard')

@section('content-title')
content-title
@endsection

@section('content-body')
<form action="/admin/education/{{$data ->id}}/edit" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="namasekolah" class="form-label">Nama Sekolah / Universitas</label>
        <input type="text" class="form-control" id="namasekolah" name="namasekolah" value="{{ old('namasekolah') ? old('namasekolah') :$data ->nama_sekolah }}" placeholder="universitas ....">
        @error('namasekolah')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="tahun" class="form-label">Tahun Menempuh Pendidikan</label>
        <input type="text" class="form-control" id="tahun" name="tahun" value="{{ old('tahun') ? old('tahun') :$data ->tahun }}" placeholder="2014-2018">
        @error('tahun')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="jurusan" class="form-label">Jurusan</label>
        <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ old('jurusan') ? old('jurusan') :$data ->jurusan }}" placeholder="Sistem Indformasi">
        @error('jurusan')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"> {{ old('deskripsi') ? old('deskripsi') :$data ->deskripsi }}</textarea>
        @error('deskripsi')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

@section('content-footer')
content-footer
@endsection