<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    @include('frontend.templates.navbar')
      <div class="">Ini Homepage</div>
      <div class="row">
        @foreach($items as $item)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ Storage::url('/' . $item->gallery->first()->image) }}" class="card-img-top" alt="Tour Image" width="150px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">Lokasi: {{ $item->region->location }}</p>
                        <p class="card-text">Kategori: {{ $item->category->name }}</p>
                        <p class="card-text">Biaya: Rp.{{ $item->price }} /Orang</p>
                        <a href="{{ route('detail', $item->slug) }}" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>