@extends('layouts.dasboard')

@section('content-title')
content-title
@endsection

@section('content-body')
<form action="/admin/resume/edit" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="judulresume" class="form-label">Judul Resume</label>
        <input type="text" class="form-control" id="judulresume" name="judulresume" value="{{ old('judulresume') ? old('judulresume') :$data ->judul_resume }}" placeholder="Resume / Lamaran / Data diri">
        @error('judulresume')
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
    <div class="mb-3">
        <label for="juduleducation" class="form-label">Judul Education</label>
        <input type="text" class="form-control" id="juduleducation" name="juduleducation" value="{{ old('juduleducation') ? old('juduleducation') :$data ->judul_education }}" placeholder="Resume / Lamaran / Data diri">
        @error('juduleducation')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="judulexperience" class="form-label">Judul Resume</label>
        <input type="text" class="form-control" id="judulexperience" name="judulexperience" value="{{ old('judulexperience') ? old('judulexperience') :$data ->judul_experience }}" placeholder="Resume / Lamaran / Data diri">
        @error('judulexperience')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

@section('content-footer')
content-footer
@endsection