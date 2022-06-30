@extends('layouts.dasboard')

@section('content-title')
Edit
@endsection

@section('content-button')

<!-- <a href="/admin/home/edit" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Edit</a> -->
@endsection

@section('content-body')
<!-- nama -->


<!-- profesi -->
<div class="mb-3">
    <div class="row">
        <div class="col">
            <label for="Profesi" class="form-label">Profesi</label>
        </div>
        <div class="col-md-2">
            <a href="/admin/add-profesi" class="btn btn-primary btn-sm float-right" role="button" aria-disabled="true">Tambah</a>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            @foreach ( $profesis as $profesi )
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control mb-3" placeholder="{{ $profesi->keterangan_profesi }}" readonly>
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-danger btn-sm m-1 float-right" data-toggle="modal" data-target="#modal-default">
                        Delete
                    </button>
                </div>
            </div>

            <!-- modal -->
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h4 class="modal-title">Apakah yakin mau dihapus . ?</h4>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <form action="/admin/home/{{$profesi->id}}/delete" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-small btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

            @endforeach
        </div>
    </div>
</div>



<!-- sosial media -->
<div class="mb-3">
    <div class="row">
        <div class="col">
            <label for="Profesi" class="form-label">Sosial Media</label>
        </div>
        <div class="col-md-2">
            <a href="/admin/add-sosial-media" class="btn btn-primary btn-sm float-right" role="button" aria-disabled="true">Tambah</a>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            @foreach ( $sosmeds as $sosmed )
            <div class="row">
                <div class="col-md-2">
                    <input type="text" class="form-control mb-3" placeholder="{{$sosmed->icon->nama_icon}}" readonly>
                </div>
                <div class="col">
                    <input type="text" class="form-control mb-3" placeholder="{{$sosmed->link}}" readonly>
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-danger btn-sm m-1 float-right" data-toggle="modal" data-target="#modal-default2">
                        Delete
                    </button>
                </div>
            </div>

            <!-- modal -->
            <div class="modal fade" id="modal-default2">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h4 class="modal-title">Apakah yakin mau dihapus he . ?</h4>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <form action="/admin/sosmed/{{$sosmed->id}}/delete" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-small btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

            @endforeach
        </div>
    </div>
</div>


<!-- Modal -->

@endsection

@section('content-footer')
content-footer
@endsection