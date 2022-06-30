@extends('layouts.dasboard')

@section('content-button')
@endsection

@section('content-title')
Pesan
@endsection

@section('content-body')
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php
        $index=1;
        @endphp
        @foreach ( $datas as $data )
        <tr>
            <th scope="row">1</th>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->subject}}</td>
            <td>
                <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-default{{$data->id}}">
                    Detail
                </button>
            </td>
        </tr>

        <div class="modal fade" id="modal-default{{$data->id}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Default Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" placeholder="{{$data->name}}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="{{$data->email}}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="email" class="form-control" id="subject" placeholder="{{$data->subject}}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly>{{$data->message}}</textarea>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <form action="/admin/message/{{$data->id}}" method="post" enctype="multipart/form-data">
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



@endsection

@section('content-footer')

@endsection