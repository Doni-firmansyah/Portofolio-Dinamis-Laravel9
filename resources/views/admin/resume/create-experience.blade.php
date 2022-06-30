@extends('layouts.dasboard')

@section('content-title')
content-title
@endsection

@section('content-body')
<form action="/admin/create/experience" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- @method('put') -->
    <div class="mb-3">
        <label for="namaperusahaan" class="form-label">Nama Perusahaan</label>
        <input type="text" class="form-control" id="namaperusahaan" name="namaperusahaan" placeholder="PT ....">
        @error('namaperusahaan')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="tahun" class="form-label">Tahun Bekerja</label>
        <input type="text" class="form-control" id="tahun" name="tahun" placeholder="2014-2018">
        @error('tahun')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="devisi" class="form-label">Devisi</label>
        <input type="text" class="form-control" id="devisi" name="devisi" placeholder="Digital marketing">
        @error('devisi')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
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