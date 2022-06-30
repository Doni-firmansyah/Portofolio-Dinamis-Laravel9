@extends('layouts.dasboard')

@section('content-title')
Detail Experience
@endsection

@section('content-body')
<div class="row">
    <div class="col-md-3">Nama Perusahaan</div>
    <div class="col-md-1">:</div>
    <div class="col-md">{{$data->nama_perusahaan}}</div>
</div>
<hr>

<div class="row">
    <div class="col-md-3">Tahun</div>
    <div class="col-md-1">:</div>
    <div class="col-md">{{$data->tahun}}</div>
</div>
<hr>

<div class="row">
    <div class="col-md-3">Devisi</div>
    <div class="col-md-1">:</div>
    <div class="col-md">{{$data->devisi}}</div>
</div>
<hr>

<div class="row">
    <div class="col-md-3">Deskripsi</div>
    <div class="col-md-1">:</div>
    <div class="col-md">{{$data->deskripsi}}</div>
</div>
<hr>

@endsection

@section('content-footer')

<div class="row">
    <div class="col-4 d-flex justify-content-center"><a href="/admin/experience/{{$data->id}}/edit" class="btn btn-primary btn-sm " role="button" aria-disabled="true">Edit</a></div>
    <div class="col d-flex justify-content-center">

        <form action="/admin/experience/{{$data->id}}/delete" method="POST" enctype="multipart/form-data">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
    </div>
    @endsection