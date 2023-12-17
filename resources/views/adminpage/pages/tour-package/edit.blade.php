@extends('adminpage.templates.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Paket Tour {{ $item->title }}</h1>
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
                <form action="{{ route('tour-package.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $item->title }}">
                </div>
                <div class="form-group">
                    <label for="city">Kota/Kabupaten</label>
                    <input type="text" class="form-control" name="city" placeholder="Kota/Kabupaten" value="{{ $item->city }}">
                </div>
                <div class="form-group">
                    <label for="region" class="form-label">Pilih Lokasi: </label>
                    <select class="form-select" name="region_id">
                        @foreach ($regions as $region)
                            <option value="{{ $region->id }}" {{ $item->region_id == $region->id ? 'selected' : '' }}>
                                {{ $region->location }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" rows="10" class="d-block w-100 form-control">{{ $item->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="num_people">Jumlah Orang</label>
                    <input type="text" class="form-control" name="num_people" placeholder="Jumlah Orang" value="{{ $item->num_people }}">
                </div>
                <div class="form-group">
                    <label for="category" class="form-label">Pilih Kategori: </label>
                    <select class="form-select" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tour_guide">Apakah memerlukan tour guide?</label>
                    <select class="form-control" id="tour_guide" name="tour_guide">
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="duration">Durasi Tour (misal: 2 hari 1 malam)</label>
                    <input type="text" class="form-control" id="duration" name="duration" placeholder="Masukkan durasi tour" value="{{ $item->duration }}">
                </div>
                <div class="form-group">
                    <label for="departure_date">Tanggal Keberangkatan</label>
                    <input type="date" class="form-control" id="departure_date" name="departure_date" value="{{ $item->departure_date }}">
                </div>
                <div class="form-group">
                    <label for="price">Harga</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Masukkan harga" value="{{ $item->price }}">
                </div>
                <div class="form-group">
                    <label for="map_url">Masukkan Kode Embed Map Google Maps</label>
                    <input type="text" class="form-control" name="map_url" placeholder="Masukkan Kode Embed <iframe></iframe>" value="{{ $item->map_url }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Ubah</button>                                                
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection