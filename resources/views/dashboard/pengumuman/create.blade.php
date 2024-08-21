<?php
    if(old())
    {
        $judul = old('judul');
        $thumbnail = old('thumbnail');
        $konten = old('konten');
    } else {
        $judul = null;
        $thumbnail = null;
        $konten = null;
    }
?>

@extends('layouts.template')

@section('judul')
Create Pengumuman
@endsection

@section('extracss')
<script src="{{asset('/vendor/ckeditor/ckeditor.js')}}"></script>
@endsection

@section('main')
<section class="inner-page mt-4">
    <div class="container">
        <h2>Create Pengumuman</h2>

        @include('errors.message')

        <form method="post" action="{{url('/dashboard/pengumuman-create')}}" enctype="multipart/form-data" onsubmit="return konfirmasiSubmit()">
            @csrf

            <div class="row">
                <div class="col-md-12">

                    <div class="form-group">
                        <label>Judul</label>
                        <input <?php if(!isset($_GET['ubah'])){ echo "required";} ?> type="text" name="judul" class="form-control" value="{{$judul}}" required>
                    </div>

                    <div class="form-group">
                        <label>Thumbnail</label>
                        <input <?php if(!isset($_GET['ubah'])){ echo "required";} ?> type="file" name="thumbnail" class="form-control" value="{{$thumbnail}}" required>
                    </div>

                    <div class="form-group">
                        <label>Konten</label>
                        <textarea <?php if(!isset($_GET['ubah'])){ echo "required";} ?> name="konten" class="form-control" required>{!! $konten !!}</textarea>
                    </div>
                    <hr>
                    <div class="btn-group float-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
</section>
@endsection

@section('extrajs')
<script>
    ClassicEditor
    .create( document.querySelector( '.ckeditor' ) )
    .catch( error => {
        // console.error( error );
    } );
</script>

<script>
    function konfirmasiSubmit()
    {
        var r = confirm('Lanjutkan penyimpanan data?');

        if(r)
        {
            return true;
        } else {
            return false;
        }
    }
</script>
@endsection