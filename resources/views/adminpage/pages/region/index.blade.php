@extends('adminpage.templates.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Paket Tour Wisata Budaya</h1>
            <a href="{{ route('tour-package.create') }}" class="btn btn-sm btn-primary shadow-sm">
               <i class="fas fa-plus fa-sm text-white-50">Tambah Tour Wisata</i>
            </a>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" callspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Lokasi</th>
                                <th>Deskripsi</th>
                                <th>Jumlah Orang</th>
                                <th>Kategori</th>
                                <th>Tour Guide</th>
                                <th>Durasi</th>
                                <th>Waktu Keberangkatan Tour</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->region->location }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->num_people }}</td>
                                <td>{{ $item->category->name }}</td>
                                <td>{{ $item->tour_guide}}</td>
                                <td>{{ $item->duration }}</td>
                                <td>{{ $item->departure_date }}</td>
                                <td>{{ $item->price }}</td>
                                <td>
                                    <a href="{{ route('tour-package.edit', $item->id) }}" class="btn btn-info">
                                       edit data
                                    </a>
                                    <form action="{{ route('tour-package.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        Delete
                                    </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    Data masih kosong
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection