@extends('layouts.dasboard')

@section('content-title')

@endsection

@section('content-body')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h4 style="color: gold;">{{$data->judul_portofolio}}</h4>
            </div>
            <div class="col">
                <a href="/admin/portofolio/edit" class="btn btn-primary btn-sm float-right" role="button" aria-disabled="true">Edit</a>
            </div>
        </div>
    </div>
    <div class="card-body">{{$data->deskripsi}}</div>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h4 style="color: gold;">haha</h4>
            </div>
            <div class="col">
                <a href="/admin/project/add" class="btn btn-primary btn-sm float-right" role="button" aria-disabled="true">Tambah</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card-body">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="..." class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <div class="row">
                    <div class="col-3">Nama</div>
                    <div class="col-1">:</div>
                    <div class="col">Nama</div>
                </div>
                <div class="row">
                    <div class="col-3">Nama</div>
                    <div class="col-1">:</div>
                    <div class="col">Nama</div>
                </div>
                <div class="row">
                    <div class="col-3">Nama</div>
                    <div class="col-1">:</div>
                    <div class="col">Nama</div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('content-footer')
content-footer
@endsection