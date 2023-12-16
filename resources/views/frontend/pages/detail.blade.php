@extends('frontend.templates.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card card-details">
                <h1>{{ $items->title }}</h1>
                @if($items->region)
                    <p class="details-p">{{ $items->region->location }}</p>
                @else
                    <p class="details-p">No Data</p>
                @endif
                @if($items->gallery && count($items->gallery) > 0)
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach($items->gallery as $key => $image)
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}" aria-current="{{ $key === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $key + 1 }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach($items->gallery as $key => $image)
                                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                    <img src="{{ Storage::url('/' . $image->image) }}" class="d-block w-100" alt="Gallery Image" style="max-height: 450px; object-fit: cover;">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                @else
                    <p>No images in the gallery.</p>
                @endif
                <h2 class="mt-3">Deskripsi</h2>
                <p class="details-p">{{ $items->description }}</p>
                <div class="features row" style="margin-top: 20px; margin-bottom: 20px;">
                    <div class="col-md-3">
                        <span class="bi bi-tags-fill description-span"></span>
                        <div class="description">
                            <h4>Kategori</h4>
                            <p>
                                @if ($items->category)
                                    {{ $items->category->name }}
                                @else
                                    No Data
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 border-left">
                        <span class="bi bi-people-fill description-span"></span>
                        <div class="description">
                            <h4>Jumlah Orang</h4>
                            <p>{{ $items->num_people }} Orang</p>
                        </div>
                    </div>
                    <div class="col-md-3 border-left">
                        <span class="bi bi-person-lines-fill description-span"></span>
                        <div class="description">
                            <h4>Tour Guide</h4>
                            <p>
                                @if ($items->tour_guide)
                                    Iya
                                @else
                                    Tidak
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 border-left">
                        <span class="bi bi-calendar2-week-fill description-span"></span>
                        <div class="description">
                            <h4>Durasi Tour</h4>
                            <p>{{ $items->duration }}</p>
                        </div>
                    </div>
                </div>
                <h2 class="mt-3">Peta Lokasi</h2>
                <iframe  class="location-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126646.20960979542!2d112.63028191963222!3d-7.275612006286057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf8381ac47f%3A0x3027a76e352be40!2sSurabaya%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1696634292920!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Peta Lokasi"></iframe>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card card-right">
                <h2 class="text-center">Informasi Tour</h2>
                <hr>
                <table class="tour-information">
                    <tr>
                        <th width="50%">Waktu Keberangkatan</th>
                        <td width="50%" class="text-right">
                            {{ \Carbon\Carbon::createFromFormat('Y-m-d', $items->departure_date)->translatedFormat('d F Y') }}
                        </td>
                    </tr>
                    <tr>
                        <th width="50%">Tipe</th>
                        <td width="50%" class="text-right">
                            Open Tour
                        </td>
                    </tr>
                    <tr>
                        <th width="50%">Biaya</th>
                        <td width="50%" class="text-right">
                            Rp. {{ number_format($items->price, 0, ',', '.') }} / Orang
                        </td>
                    </tr>
                </table>
            </div>
            <div class="booking-container">
                <a href="#" class="btn btn-block btn-primary btn-booking mt-3 py-2"><h5>Booking</h5></a>
            </div>
        </div>
    </div>
</div>
@endsection   