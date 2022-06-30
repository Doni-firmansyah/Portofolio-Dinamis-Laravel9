@extends('layouts.dasboard')

@section('content-button')
<a href="/admin/home" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Back</a>
@endsection

@section('content-title')
Tambah Profesi
@endsection

@section('content-body')
<!-- nama -->
<form action="/admin/add-sosial-media" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- @method('put') -->
    <div class="form-group">
        <label for="icon">Icon Sosial Media</label>
        <select class="form-control select2" style="width: 100%;"  id="icon" name="icon">
            <option selected="selected"></option>
           @foreach ($icons as $icon )
            <option value="{{$icon->id}}">{{$icon->nama_icon}}</option>
           @endforeach
        </select>
        @error('icon')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>
    <div class="form-group">
        <label for="link">Link Sosial Media</label>
        <input type="text" class="form-control" id="link" name="link" placeholder="link sosial media">
        @error('link')
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