<?php
    if(old())
    {
        $judul = old('judul');
        $thumbnail = old('thumbnail');
        $konten = old('konten');
    } else {
        $judul = $data->judul;
        $thumbnail = $data->thumbnail;
        $konten = $data->konten;
    }
?>

@extends('layouts.template')

@section('judul')
Update Pengumuman
@endsection

@section('extracss')
<script src="{{asset('/vendor/ckeditor/ckeditor.js')}}"></script>
@endsection

@section('main')
<section class="inner-page mt-4">
    <div class="container">
        <h2>Update Pengumuman</h2>

        @include('errors.message')

        <form method="post" action="{{url('/dashboard/pengumuman/'.$data->id)}}" onsubmit="return konfirmasiSubmit()">
            @csrf

            <div class="row">
                <div class="col-md-12">

                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" value="{{$judul}}" required>
                    </div>

                    <div class="form-group">
                        <label>Thumbnail</label>
                        <input type="file" name="judul" class="form-control" value="{{$thumbnail}}" required>
                    </div>

                    <div class="form-group">
                        <label>Konten</label>
                        <textarea name="konten" class="form-control" required>{!! $konten !!}</textarea>
                    </div>
                    <hr>
                    <div class="btn-group">
                        <a href="{{url('/dashboard/pengumuman-delete'.$data->id)}}" class="btn btn-danger" onclick="return confirm('Yakin data akan dihapus?')">Delete</a>
                        <button type="submit" class="btn btn-primary">Update</button>
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
        var r = confirm('Lanjutkan update data?');

        if(r)
        {
            return true;
        } else {
            return false;
        }
    }
</script>
@endsection