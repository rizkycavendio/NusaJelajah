@extends('adminpage.templates.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Wilayah/Lokasi</h1>
        </div>

        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
         </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('region.update', $items->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                <div class="form-group">
                    <label for="location">Masukkan Lokasi:</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Masukkan Lokasi" value="{{ $items->location }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>                                                
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection