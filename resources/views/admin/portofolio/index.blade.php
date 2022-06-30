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

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Project</th>
                    <th scope="col">Category</th>
                    <th scope="col">Client</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $index=1;
                @endphp
                @foreach ($projects as $project )
                <tr>
                    <th scope="row">{{$index++}}</th>
                    <td>{{$project->nama_project}}</td>
                    <td>{{$project->category}}</td>
                    <td>{{$project->client}}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-lg{{$project->id}}">
                            Detail
                        </button>
                    </td>
                </tr>
                <div class="modal fade" id="modal-lg{{$project->id}}">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Large Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-6">
                                            <!-- /image/upload/Screenshot (1).Screenshot (1).png-1656162935.png -->
                                            <div class="card">
                                                <div class="card-footer"></div>
                                                <div class="card-body">
                                                    <div id="carouselExampleControls{{$project->id}}" class="carousel slide" data-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img src="/image/upload/{{$project->gambar1}}" class="d-block w-100" alt="...">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="/image/upload/{{$project->gambar2}}" class="d-block w-100" alt="...">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="/image/upload/{{$project->gambar3}}" class="d-block w-100" alt="...">
                                                            </div>
                                                        </div>
                                                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls{{$project->id}}" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </button>
                                                        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls{{$project->id}}" data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card-footer">

                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-6">
                                            <div class="card">
                                                <div class="card-footer"></div>
                                                <div class="card body">
                                                    <dic class="row m-2">
                                                        <div class="col-4">Nama Project</div>
                                                        <div class="col-1">:</div>
                                                        <div class="col">{{$project->nama_project}}</div>
                                                    </dic>
                                                    <hr>
                                                    <dic class="row m-2">
                                                        <div class="col-4">Category</div>
                                                        <div class="col-1">:</div>
                                                        <div class="col">{{$project->category}}</div>
                                                    </dic>
                                                    <hr>
                                                    <dic class="row m-2">
                                                        <div class="col-4">Client</div>
                                                        <div class="col-1">:</div>
                                                        <div class="col">{{$project->client}}</div>
                                                    </dic>
                                                    <hr>
                                                    <dic class="row m-2">
                                                        <div class="col-4">Project Date</div>
                                                        <div class="col-1">:</div>
                                                        <div class="col">{{$project->project_date}}</div>
                                                    </dic>
                                                    <hr>
                                                    <dic class="row m-2">
                                                        <div class="col-4">Deskripsi</div>
                                                        <div class="col-1">:</div>
                                                        <div class="col">{{$project->deskripsi}}</div>
                                                    </dic>
                                                </div>
                                                <div class="card-footer"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <a href="/admin/project/{{$project->id}}/edit" class="btn btn-primary" role="button" aria-disabled="true">Edit</a>

                                <form action="/admin/portofolio/{{$project->id}}/delete" enctype="multipart/form-data" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                @endforeach

            </tbody>
        </table>
    </div>

</div>
@endsection

@section('content-footer')
content-footer
@endsection