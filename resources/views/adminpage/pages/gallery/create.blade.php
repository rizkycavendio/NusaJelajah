@extends('adminpage.templates.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Gallery</h1>
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
                <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="tour_package_id">Tour Package</label>
                    <select name="tour_package_id" required class="form-control">
                        <option value="">Pilih Tour Package</option>
                        @foreach ($tour_packages as $tour_package)
                            <option value="{{ $tour_package->id }}">{{ $tour_package->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" placeholder="image">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>                                                
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection