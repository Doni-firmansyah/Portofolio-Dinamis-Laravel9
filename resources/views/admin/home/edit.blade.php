@extends('layouts.dasboard')

@section('content-title')
content-title
@endsection

@section('content-body')
<!-- nama -->
<form action="/admin/home/edit" method="POST" enctype="multipart/form-data">
    @csrf @method('put')
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Nama" value="{{ $data->nama }}">
    </div>

    <!-- profesi -->
    <div class="mb-3">
        <label for="Profesi" class="form-label">Profesi</label>
        <input type="text" class="form-control" id="nama" placeholder="Profesi 1">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="nama" placeholder="Profesi 2">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" id="nama" placeholder="Profesi 3">
    </div>

    <!-- sosial media -->
    <div class="mb-3">
        <label for="sosial1" class="form-label">Sosial Media 1</label>
        <div class="row">
            <div class="col-md-3">
                <input type="text" class="form-control" id="sosial1" placeholder="Icon sosial media 1">
            </div>
            <div class="col">
                <input type="text" class="form-control" id="sosial1" placeholder="Link  sosial media 1">
            </div>
        </div>
    </div>
    <div class="mb-3">

        <div class="row">
            <div class="col-md-3">
                <input type="text" class="form-control" id="sosial2" placeholder="Icon sosial media 2">
            </div>
            <div class="col">
                <input type="text" class="form-control" id="sosial2" placeholder="Link  sosial media 2">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <div class="row">
            <div class="col-md-3">
                <input type="text" class="form-control" id="sosial3" placeholder="Icon sosial media 3">
            </div>
            <div class="col">
                <input type="text" class="form-control" id="sosial3" placeholder="Link  sosial media 3">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <div class="row">
            <div class="col-md-3">
                <input type="text" class="form-control" id="sosial4" placeholder="Icon sosial media 4">
            </div>
            <div class="col">
                <input type="text" class="form-control" id="sosial4" placeholder="Link  sosial media 4">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <div class="row">
            <div class="col-md-3">
                <input type="text" class="form-control" id="sosial5" placeholder="Icon sosial media 5">
            </div>
            <div class="col">
                <input type="text" class="form-control" id="sosial5" placeholder="Link  sosial media 5">
            </div>
        </div>
    </div>
</form>
@endsection

@section('content-footer')
content-footer
@endsection