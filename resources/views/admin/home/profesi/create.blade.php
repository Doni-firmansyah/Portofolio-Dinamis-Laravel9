@extends('layouts.dasboard')

@section('content-button')
<a href="/admin/home" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Back</a>
@endsection

@section('content-title')
Tambah Profesi
@endsection

@section('content-body')
<!-- nama -->
<form action="/admin/add-profesi" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- @method('put') -->

    <div class="form-group">
        <label for="nama_profesi">Nama Profesi</label>
        <input type="text" class="form-control" id="nama_profesi" name="nama_profesi" placeholder="nama_profesi">
      
        @error('nama_profesi')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>
    <div class="form-group">
        <label for="keterangan_profesi">Keterangan Profesi</label>
        <input type="text" class="form-control" id="keterangan_profesi" name="keterangan_profesi" placeholder="keterangan_profesi">
        @error('keterangan_profesi')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- /.card-body -->

    <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection

@section('content-footer')
content-footer
@endsection