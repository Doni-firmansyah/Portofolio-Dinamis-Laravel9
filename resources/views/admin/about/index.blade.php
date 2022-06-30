@extends('layouts.dasboard')

@section('content-button')
<a href="/admin/about/edit" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Edit</a>
@endsection

@section('content-title')
{{$about->judul}}
@endsection

@section('content-body')
<!-- nama -->

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="row m-3">
                <div class="col">
                    <div class="card-header">
                        <h4 style="color: gold;">{{$about->judul}}</h4>
                    </div>
                    <div class="card-body">
                        <p>{{$about->deskrispsi_judul}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card ">
                    <div class="card-header">
                        <h4>&nbsp </h4>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="/image/upload/{{$about->gambar}}" alt="User profile picture">
                        </div>
                    </div>
                    <div class="card-footer">
                        <h4>&nbsp </h4>
                    </div>
                </div>
            </div>
            <div class="col">

                <div class="card-header" style="color: gold;">
                    <h4>{{$about->sub_judul}}</h4>
                </div>
                <div class="card-body">
                    <p>{{$about->deskripsi_sub_judul}}</p>
                    <div class="row">
                        <div class="col-md-4"><input type="text" class="form-control mb-3" placeholder="{{$about->pertanyaan1 }}" readonly></div>
                        <div class="col"><input type="text" class="form-control mb-3" placeholder="{{$about->jawaban1 }}" readonly></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><input type="text" class="form-control mb-3" placeholder="{{$about->pertanyaan2 }}" readonly></div>
                        <div class="col"><input type="text" class="form-control mb-3" placeholder="{{$about->jawaban2 }}" readonly></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><input type="text" class="form-control mb-3" placeholder="{{$about->pertanyaan3 }}" readonly></div>
                        <div class="col"><input type="text" class="form-control mb-3" placeholder="{{$about->jawaban3 }}" readonly></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><input type="text" class="form-control mb-3" placeholder="{{$about->pertanyaan4 }}" readonly></div>
                        <div class="col"><input type="text" class="form-control mb-3" placeholder="{{$about->jawaban4 }}" readonly></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><input type="text" class="form-control mb-3" placeholder="{{$about->pertanyaan5 }}" readonly></div>
                        <div class="col"><input type="text" class="form-control mb-3" placeholder="{{$about->jawaban5 }}" readonly></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><input type="text" class="form-control mb-3" placeholder="{{$about->pertanyaan6 }}" readonly></div>
                        <div class="col"><input type="text" class="form-control mb-3" placeholder="{{$about->jawaban6 }}" readonly></div>
                    </div>
                    <p>{{$about->datapenunjang}}dawdwd</p>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header ml-3" style="color: gold;">
        <h4>{{$about->judul_skill}}</h4>
    </div>
    <div class="card-body ">
        <p class="ml-3">{{$about->deskripsi_judul_skill}}</p>

        <div class="row">
            <div class="col m-3">
                <div class="card">
                    <div class="col">
                        <div class="row">
                            <div class="col"><input type="text" class="form-control mb-3" placeholder="{{$about->skill1}}" readonly></div>
                            <div class="col"><input type="text" class="form-control mb-3" placeholder="{{$about->proses_skill1 }} %" readonly></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col"><input type="text" class="form-control mb-3" placeholder="{{$about->skill2 }}" readonly></div>
                            <div class="col"><input type="text" class="form-control mb-3" placeholder="{{$about->proses_skill2 }}" readonly></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col"><input type="text" class="form-control mb-3" placeholder="{{$about->skill3 }}" readonly></div>
                            <div class="col"><input type="text" class="form-control mb-3" placeholder="{{$about->proses_skill3 }}" readonly></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col m-3">
                <div class="card">
                    <div class="col">
                        <div class="row">
                            <div class="col"><input type="text" class="form-control mb-3" placeholder="{{$about->skill4 }}" readonly></div>
                            <div class="col"><input type="text" class="form-control mb-3" placeholder="{{$about->proses_skill4 }}" readonly></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col"><input type="text" class="form-control mb-3" placeholder="{{$about->skill5 }}" readonly></div>
                            <div class="col"><input type="text" class="form-control mb-3" placeholder="{{$about->proses_skill5 }}" readonly></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col"><input type="text" class="form-control mb-3" placeholder="{{$about->skill6 }}" readonly></div>
                            <div class="col"><input type="text" class="form-control mb-3" placeholder="{{$about->proses_skill6 }}" readonly></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>

@endsection

@section('content-footer')
content-footer
@endsection