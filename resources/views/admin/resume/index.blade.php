@extends('layouts.dasboard')

@section('content-title')
content-title
@endsection

@section('content-body')


<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col"> <H4 style="color: gold;">{{$data->judul_resume}}</H4></div>
            <div class="col"> <a href="/admin/resume/edit" class="btn btn-primary btn-sm float-right" role="button" aria-disabled="true">Edit</a></div>
        </div>
       
    </div>
    <div class="card-body">
        <p>{{$data->deskripsi}}</p>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">

                <div class="row">
                    <div class="col">
                        <h4 style="color: gold;">{{$data->judul_education}}</h4>
                    </div>
                    <div class="col"><a href="/admin/education/create" class="btn btn-primary btn-sm float-right" role="button" aria-disabled="true">Tambah</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Sekolah</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $index=1
                        @endphp
                        @foreach ($educations as $education )
                        <tr>
                            <th scope="row"> {{$index++}}</th>
                            <td>{{$education->nama_sekolah}}</td>
                            <td>{{$education->tahun}}</td>
                            <td><a href="/admin/education/{{$education->id}}" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h4 style="color: gold;">{{$data->judul_experience}}</h4>
                    </div>
                    <div class="col"><a href="/admin/create/experience" class="btn btn-primary btn-sm float-right" role="button" aria-disabled="true">Tambah</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Sekolah</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $index=1
                        @endphp
                        @foreach ($experience as $expe )
                        <tr>
                            <th scope="row"> {{$index++}}</th>
                            <td>{{$expe->nama_perusahaan}}</td>
                            <td>{{$expe->devisi}}</td>
                            <td><a href="/admin/experience/{{$expe->id}}" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content-footer')
content-footer
@endsection