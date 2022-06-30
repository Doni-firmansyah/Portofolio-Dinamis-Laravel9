@extends('layouts.dasboard')

@section('content-title')
@endsection

@section('content-body')
<form action="/admin/portofolio/edit" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="judulportofolio" class="form-label">Judul Portofolio</label>
        <input type="text" class="form-control" id="judulportofolio" name="judulportofolio" value="{{ old('judulportofolio') ? old('judulportofolio') :$data ->judul_portofolio }}">
        @error('judulportofolio')
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