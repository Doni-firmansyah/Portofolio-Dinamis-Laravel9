@extends('layouts.dasboard')

@section('content-button')
<a href="/admin/about/edit" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Edit</a>
@endsection

@section('content-title')
{{$data->judul}}
@endsection

@section('content-body')
<!-- nama -->
<form action="/admin/about/edit" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')

    <div class="form-group">
        <label style="color: gold;" for="judul">Judul</label>
        <input type="text" class="form-control" id="judul" name="judul" value="{{ $data->judul}}">

        @error('judul')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label style="color: gold;" for="deskrispsi_judul" class="form-label">Deskripsi Judul</label>
        <textarea class="form-control" id="deskrispsi_judul" name="deskrispsi_judul" rows="3">{{ $data->deskrispsi_judul}}</textarea>
        @error('deskrispsi_judul')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label style="color: gold;" for="sub_judul">Sub Judul</label>
        <input type="text" class="form-control" id="sub_judul" name="sub_judul" value="{{ $data->sub_judul}}">

        @error('sub_judul')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label style="color: gold;" for="deskripsi_sub_judul" class="form-label">Deskripsi Sub Judul</label>
        <textarea class="form-control" id="deskripsi_sub_judul" name="deskripsi_sub_judul" rows="3">{{ $data->deskripsi_sub_judul}}</textarea>
        @error('deskripsi_sub_judul')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="row mb-2">
        <div class="col-md-2 mt-1"><label style="color: gold;" for="pertanyaan1" class="form-label">Biodata 1</label></div>
        <div class="col">
            <!-- <label for="exampleSelectRounded0">Flat <code>.rounded-0</code></label> -->
            <div class="form-group">
                <select class="form-control select2" style="width: 100%;" id="pertanyaan1" name="pertanyaan1">
                    <option selected="selected">{{ $data->pertanyaan1}}</option>
                    <option value="Name">Name</option>
                    <option value="Nama">Nama</option>
                </select>
            </div>
            <!-- <input type="text" class="form-control" id="pertanyaan1" name="pertanyaan1" value=" {{ $data->pertanyaan1}}"> -->
        </div>
        <div class="col"><input type="text" class="form-control" id="jawaban1" name="jawaban1" value="{{$data->jawaban1}}"></div>
    </div>

    <div class="row mb-2">
        <div class="col-md-2 mt-1"><label style="color: gold;" for="pertanyaan2" class="form-label">Biodata 2</label></div>
        <div class="col">
            <div class="form-group">
                <select class="form-control select2" style="width: 100%;" id="pertanyaan2" name="pertanyaan2">
                    <option selected="selected">{{ $data->pertanyaan2}}</option>
                    <option value="Email">Email</option>

                </select>
            </div>
            <!-- <input type="text" class="form-control" id="pertanyaan2" name="pertanyaan2" value="{{ $data->pertanyaan2}}"> -->
        </div>
        <div class="col"><input type="text" class="form-control" id="jawaban2" name="jawaban2" value="{{$data->jawaban2}}"></div>
    </div>

    <div class="row mb-2">
        <div class="col-md-2 mt-1"><label style="color: gold;" for="pertanyaan3" class="form-label">Biodata 3</label></div>
        <div class="col">
            <div class="form-group">
                <select class="form-control select2" style="width: 100%;" id="pertanyaan3" name="pertanyaan3">
                    <option selected="selected">{{ $data->pertanyaan3}}</option>
                    <option value="Address">Address</option>
                    <option value="Alamat">Alamat</option>
                </select>
            </div>
            <!-- <input type="text" class="form-control" id="pertanyaan3" name="pertanyaan3" value="{{ $data->pertanyaan3}}"> -->
        </div>
        <div class="col"><input type="text" class="form-control" id="jawaban3" name="jawaban3" value="{{$data->jawaban3}}"></div>
    </div>

    <div class="row mb-2">
        <div class="col-md-2 mt-1"><label style="color: gold;" for="pertanyaan4" class="form-label">Biodata 4</label></div>
        <div class="col">
            <div class="form-group">
                <select class="form-control select2" style="width: 100%;" id="pertanyaan4" name="pertanyaan4">
                    <option selected="selected">{{ $data->pertanyaan4}}</option>
                    <option value="Phone">Phone</option>
                </select>
            </div>
            <!-- <input type="text" class="form-control" id="pertanyaan4" name="pertanyaan4" value="{{ $data->pertanyaan4}}"> -->
        </div>
        <div class="col"><input type="text" class="form-control" id="jawaban4" name="jawaban4" value="{{$data->jawaban4}}"></div>
    </div>

    <div class="row mb-2">
        <div class="col-md-2 mt-1"><label style="color: gold;" for="pertanyaan5" class="form-label">Biodata 5</label></div>
        <div class="col"><input type="text" class="form-control" id="pertanyaan5" name="pertanyaan5" value=" {{ $data->pertanyaan5}}"></div>
        <div class="col"><input type="text" class="form-control" id="jawaban5" name="jawaban5" value="{{$data->jawaban5}}"></div>
    </div>

    <div class="row mb-2">
        <div class="col-md-2 mt-1"><label style="color: gold;" for="pertanyaan6" class="form-label">Biodata 6</label></div>
        <div class="col"><input type="text" class="form-control" id="pertanyaan6" name="pertanyaan6" value="{{ $data->pertanyaan6}}"></div>
        <div class="col"><input type="text" class="form-control" id="jawaban6" name="jawaban6" value="{{$data->jawaban6}}"></div>
    </div>

    <div class="mb-3">
        <label style="color: gold;" for="datapenunjang" class="form-label">Deskripsi lanjutan</label>
        <textarea class="form-control" id="datapenunjang" name="datapenunjang" rows="3">{{$data->datapenunjang}}</textarea>
        @error('datapenunjang')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <hr>

    <div class="form-group">
        <label style="color: gold;" for="judulskill">Judul Skill</label>
        <input type="text" class="form-control" id="judulskill" name="judulskill" value="{{ $data->judul_skill}}">

        @error('judul')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label style="color: gold;" for="deskripsijudulskill" class="form-label">Deskripsi judul skill</label>
        <textarea class="form-control" id="deskripsijudulskill" name="deskripsijudulskill" rows="3">{{$data->deskripsi_judul_skill}}</textarea>
        @error('deskripsijudulskill')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="row mb-2">
        <div class="col-md-2 mt-1"><label style="color: gold;" for="skill1" class="form-label">Skill 1</label></div>
        <div class="col"><input type="text" class="form-control" id="skill1" name="skill1" value=" {{ $data->skill1}}"></div>
        <div class="col"><input type="text" class="form-control" id="prosesskill1" name="prosesskill1" value="{{$data->proses_skill1}}"></div>
    </div>

    <div class="row mb-2">
        <div class="col-md-2 mt-1"><label style="color: gold;" for="skill2" class="form-label">Skill 2</label></div>
        <div class="col"><input type="text" class="form-control" id="skill2" name="skill2" value="{{ $data->skill2}}"></div>
        <div class="col"><input type="text" class="form-control" id="prosesskill2" name="prosesskill2" value="{{$data->proses_skill2}}"></div>
    </div>

    <div class="row mb-2">
        <div class="col-md-2 mt-1"><label style="color: gold;" for="skill3" class="form-label">Skill 3</label></div>
        <div class="col"><input type="text" class="form-control" id="skill3" name="skill3" value="{{ $data->skill3}}"></div>
        <div class="col"><input type="text" class="form-control" id="prosesskill3" name="prosesskill3" value="{{$data->proses_skill3}}"></div>
    </div>

    <div class="row mb-2">
        <div class="col-md-2 mt-1"><label style="color: gold;" for="skill4" class="form-label">Skill 4</label></div>
        <div class="col"><input type="text" class="form-control" id="skill4" name="skill4" value="{{ $data->skill4}}"></div>
        <div class="col"><input type="text" class="form-control" id="prosesskill4" name="prosesskill4" value="{{$data->proses_skill4}}"></div>
    </div>

    <div class="row mb-2">
        <div class="col-md-2 mt-1"><label style="color: gold;" for="skill5" class="form-label">Skill 5</label></div>
        <div class="col"><input type="text" class="form-control" id="skill5" name="skill5" value=" {{ $data->skill5}}"></div>
        <div class="col"><input type="text" class="form-control" id="prosesskill5" name="prosesskill5" value="{{$data->proses_skill5}}"></div>
    </div>

    <div class="row mb-2">
        <div class="col-md-2 mt-1"><label style="color: gold;" for="skill6" class="form-label">Skill 6</label></div>
        <div class="col"><input type="text" class="form-control" id="skill6" name="skill6" value="{{ $data->skill6}}"></div>
        <div class="col"><input type="text" class="form-control" id="prosesskill6" name="prosesskill6" value="{{$data->proses_skill6}}"></div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <input type="file" name="image" placeholder="Choose image" id="image">
            @error('image')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-md-12 mb-2">
        @if ($data->gambar)
        <img id="preview-image-before-upload" src="/image/upload/{{$data->gambar}}" alt="preview image" style="max-height: 250px;">
        @else
        <img id="preview-image-before-upload" src="/image/OIP.jpg" alt="preview image" style="max-height: 250px;">
        @endif
    </div>

    <!-- /.card-body -->
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(e) {
        $('#image').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#preview-image-before-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
@endsection

@section('content-footer')
content-footer
@endsection