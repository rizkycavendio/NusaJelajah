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

    <div class="container mt-4">
        <div class="row mb-4">
            <div class="col-md-4">   
                    <form action="/all-tour" method="GET">
                        @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                          <button class="btn btn-warning" type="submit" >Search</button>
                        </div>
                    </form>
            </div>
        </div>

        <div class="col-xl-2">
            {{-- filter menu --}}
            <div class="card">
              <h5 class="p-2 text-center">Filter <i class="bi bi-funnel"></i></h5>
              <div class="accordion" id="accordionPanelsStayOpenExample">
                            <!-- Bagian Wilayah -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Wilayah
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body p-0">
                                <ul class="list-group rounded-0">
                                    @foreach($regions as $region)
                                    <li class="list-group-item">
                                        <span class="class=bi bi-geo-alt">
                                            <a class="text-decoration-none text-dark" href="/all-tour?region={{ $region->slug }}">{{ $region->location }}</a>
                                        </span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Bagian Kategori -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                                Kategori
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body p-0">
                                <ul class="list-group rounded-0">
                                    @foreach($categories as $category)
                                    <li class="list-group-item">
                                        <span class="bi bi-hospital">
                                            <a class="text-decoration-none text-dark" href="/all-tour?category={{ $category->slug }}">{{ $category->name }}</a>
                                        </span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
          </div>

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
    </div>
</body>
</html>
