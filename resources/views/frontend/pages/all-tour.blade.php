@extends('frontend.templates.app')

@section('content')
{{-- slider gambar --}}
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
 <div class="carousel-indicators">
   <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
   <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
   <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
   <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
 </div>
 <div class="carousel-inner">
   <div class="carousel-item active">
     <img src="{{ asset('img/borobudur2.jpg') }}" class="d-block w-100" alt="..." style="max-height: 450px; object-fit: cover;">
   </div>
   <div class="carousel-item">
     <img src="{{ asset('img/reog-ponorogo.jpg') }}" class="d-block w-100" alt="..." style="max-height: 450px; object-fit: cover;">
   </div>
   <div class="carousel-item">
     <img src="{{ asset('img/komodo1.jpg') }}" class="d-block w-100" alt="..." style="max-height: 450px; object-fit: cover;">
   </div>
   <div class="carousel-item">
    <img src="{{ asset('img/bali1.jpg') }}" class="d-block w-100" alt="..." style="max-height: 450px; object-fit: cover;">
  </div>
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

 <div class="container-lg mt-5">
    {{-- searching bar --}}
   <div class="row justify-content-center">
       <div class="col-md-6">
         <form action="/all-tour" method="GET">
           @if (request('category'))
           <input type="hidden" name="category" value="{{ request('category') }}">
           @endif
           <div class="input-group">
             <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
             <button class="btn btn-primary" type="submit" >Search</button>
           </div>
         </form>
       </div>
   </div>
 </div>

 {{-- card produk homestay --}}
   <section>
       <div class="container-lg">
           <div class="mb-5">
               <h4>Tentukan tempat wisata sosial budaya pilihanmu!</h4>
               <p>Cari yang sesuai dengan keinginanmu</p>
               <h5>{{ $title }}</h5>
           </div>
           <div class="row justify-content-around">
             {{-- kolom kiri mini menu --}}
             <div class="col-xl-2">
               {{-- filter menu --}}
               <div class="card">
                 <h5 class="p-2 text-center">Filter <i class="bi bi-funnel"></i></h5>
                 <div class="accordion" id="accordionPanelsStayOpenExample">
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                         Wilayah
                       </button>
                     </h2>
                     <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                       <div class="accordion-body p-0">
                         <ul class="list-group rounded-0">
                           @foreach ($regions as $region)
                           <li class="list-group-item">
                                <span class="bi bi-geo-alt" style="font-size: 14px;">
                                    <a class="text-decoration-none text-dark" href="/all-tour?region={{ $region->slug }}">
                                        {{ $region->location }}
                                    </a>
                                </span>
                          </li>
                           @endforeach                        
                         </ul>
                       </div>
                     </div>
                   </div>
                   <div class="accordion-item">
                     <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                         Kategori
                       </button>
                     </h2>
                     <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                       <div class="accordion-body p-0">
                         <ul class="list-group rounded-0">
                           @foreach ($categories as $category)
                           <li class="list-group-item">
                                <span class="bi bi-hospital" style="font-size: 14px;">
                                  <a class="text-decoration-none text-dark" href="/all-tour?category={{ $category->slug }}">
                                    {{ $category->name }}
                                  </a>
                                </span>
                           </li>
                           @endforeach
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <h4 class="mt-5">Promo:</h4>
               <div class="card border-0">
                <img src="/img/banner_promo.jpg" alt="">
               </div>
             </div>

             {{-- kolom kanan card --}}
             <div class="col-xl-10">
               {{-- Lainnya --}}
               <div class="row">
                 @if ($items->count())
                 @foreach ($items as $post)
                    <div class="col cols-sm-2 cols-md-3 mb-4">
                        <div class="card shadow border-0" style="width: 15em; max-height: 406px; min-height: 406px">
                            @if ($post->gallery->isNotEmpty())
                                <div style="max-width: 400px; max-height: 300px; overflow: hidden;">
                                    <img src="{{ Storage::url($post->gallery->first()->image) }}" alt="" class="img-fluid rounded-top" style="width: 100%; height: 100%; object-fit: cover; min-width: 240px; min-height: 180px;">
                                </div>
                            @else
                                <img src="img/homestay.jpg" class="card-img-top" alt="">
                            @endif
                            <div class="card-body">
                                <!-- Informasi lain tentang TourPackage -->
                                <h5 class="card-title" style="overflow: hidden; text-overflow: ellipsis; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">{{ $post->title }}</h5>
                                <p class="card-text" style="font-size: 12px;">
                                    <a class="text-dark text-decoration-none" href="/all-tour?region={{ $post->region->slug }}">
                                        {{ $post->region->location }}
                                    </a>
                                </p>                               
                                <span class="badge bg-primary">
                                    <p class="card-text" style="font-size: 11px;">
                                        <a class="text-white text-decoration-none" href="/all-tour?region={{ $post->category->slug }}">
                                            {{ $post->category->name }}
                                        </a>
                                    </p>
                                </span> 
                                <h6 class="card-title py-2">Rp. {{ number_format($post->price, 0, ',', '.') }} / Orang</h6>
                                <!-- Tombol Detail -->
                                <div class="d-flex justify-content-end">
                                    <a href="detail/{{ $post->slug }}">
                                        <button class="btn btn-primary">Detail</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> 
                @endforeach
               </div>
             </div>
            @else
              <h5 class="text-center">Tour Package Not Found</h5>
            @endif
            <div class="d-flex justify-content-end mt-3">
             {{ $items->links() }}
            </div>
           </div>
       </div>
   </section>
@endsection    


