@extends('layouts.template')

@section('judul')
Kelola Pengumuman
@endsection

@section('main')
<section class="inner-page mt-4">
    <div class="container mt-4">
        <a href="{{url('/dashboard/pengumuman-create')}}" class="btn btn-primary mb-3 rounded-pill">
            Create Pengumuman
        </a>

        @include('errors.message')

        <div class="container">

            @if(session('eksekusi'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('eksekusi') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="table-responsive">
                <table id="dt" class="table align-middle table-bordered table-hover">
                    <thead>
                        <tr class="table-primary">
                            <th><center>No.</center></th>
                            <th><center>Judul</center></th>
                            <th><center>Thumbnail</center></th>
                            <th><center>Konten</center></th>
                            <th><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pengumuman as $item)
                        <tr>
                            <td><center>{{ $loop->iteration }}</center></td>
                            <td>{{ $item->judul }}</td>
                            <td>
                            @if($item->thumbnail)
                                <img src="{{ asset('images/pengumuman/' . $item->thumbnail) }}" alt="{{ $item->thumbnail }}" width="100">
                            @else
                                No Image
                            @endif
                            </td>
                            <td>{{ $item->konten }}</td>
                            <td>
                                <a href="{{ url('dashboard/pengumuman/'.$item->id) }}" class="btn btn-info">Lihat</a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection