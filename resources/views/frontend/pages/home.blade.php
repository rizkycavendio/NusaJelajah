<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>NusaJelajah | Home</title>
    <style>
        section {
            padding: 60px 0;
        }
    </style>
</head>
<body>
{{-- Nav bar Menu 1 --}}
<nav class="navbar sticky-top navbar-expand-lg" style="background-color: #ffffff; border-bottom: 5px solid rgb(0, 89, 255);">
    <div class="container-lg">
      <a class="navbar-brand text-primary" href="#">
        <img src="/img/logo_nusajelajah.png" alt="" width="150" height="75" class="d-inline-block">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tour">Tour</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#topDestinasi">Top Destination</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#fitur">Layanan & Fitur</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#partner">Partner Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tk">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/all-tour">Cari Tour Wisata!</a>
          </li>
        </ul>
    </div>
  </nav>
    <!-- Modal Tombol Login -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
     <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <strong> Silahkan Login </strong></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
      <div class="modal-body">
         <div class="container">
             <div class="row">
                 <div class="d-grid gap-2 mx-auto">
                     <p> Ingin login sebagai...</p>
                     <button class="btn btn-light shadow p-3" >Penyewa Homestay<i class="bi bi-currency-exchange"></i></button>
                     <button class="btn btn-light shadow p-3" >Pemilik Homestay <i class="bi bi-house-fill"></i></button>
                 </div>
             </div>
         </div>
      </div>
  </div>
</div>
</div>
  {{-- Gambar utama & text utama --}}
  <section id="intro" class="mb-5">
      <div class="container-lg mt-5">
          <div class="row justify-content-center align-items-center">
              <div class="col-md-5 text-center text-md-start">
                <h1>
                    <div class="display-5">Butuh healing? Keliling Indonesia aja!</div>
                </h1>
                <p class="lead my-4 text-muted">
                    NusaJelajah menawarkan pengalaman unik dalam menjelajahi destinasi sosial budaya di Indonesia. Temukan destinasi yang menyenangkan dan sesuai dengan kebutuhan Anda. Booking tiket dengan mudah hanya melalui NusaJelajah!
                </p>
                <div class="spinner-grow spinner-grow-sm text-danger position-absolute" role="status">
                  <span class="visually-hidden" style="">Loading...</span>
                </div>
                <a href="/all-tour" class="btn btn-primary btn-lg mb-2">Cari Tour Wisata!</a>
              </div>
              <div class="col-md-5 text-center d-none d-md-block">
                 <!-- gambar -->
                 <span class="gambar" data-bs-placement="bottom" title="Net Ninja Book Cover">
                    <img class="img-fluid rounded" src="img/homestay.jpg" alt="ebook cover">
                </span>
            </div>
          </div>
      </div>
  </section>

   {{-- Paket Tour Budaya Populer --}}
   <section id="tour" class="bg-primary">
    <div class="container-lg">
      <div class="text-center">
        <h2 class="text-light">Paket Tour Budaya Populer</h2>
        <hr style="height:2px;border-width:0;color:rgb(255, 255, 255);background-color:#ffffff">
        <p class="lead" style="color: white">Paket Tour Wisata Sosial Budaya Populer </p>
    </div>      
    <div class="row pt-4">
     @if ($items->count())
      @foreach ($items as $post)
         @if ($loop->index < 5) <!-- Memastikan hanya lima item yang ditampilkan -->
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
                  <h6 class="card-title py-2">Rp{{ $post->price }}/Orang</h6>
                  <!-- Tombol Detail -->
                  <div class="d-flex justify-content-end">
                      <a href="/all-tour/detail/{{ $post->slug }}">
                          <button class="btn btn-primary">Detail</button>
                      </a>
                  </div>
              </div>
          </div>
          </div>
         @endif
     @endforeach
      </div>
    </div>
    <div class="text-center mt-2">
      <button type="button" class="btn btn-secondary">
          <a href="/all-tour" class="text-white" style="text-decoration: none;">Lihat Semua</a>
      </button>
   </div>
    @else
     <h5 class="text-center">Tour Package Not Found</h5>
    @endif
</div>
</section>

  {{-- Top Destinasi --}}
  <section id="topDestinasi">
    <div class="container-lg">
      <div class="text-center mt-4">
        <h2 style="color: rgb(54, 54, 54)">Top Destinasi Wisata</h2>
        <hr style="height:2px;border-width:0;color:rgb(0, 0, 0);background-color:#000000">
        <p class="lead" style="color: rgb(0, 0, 0)">Top destinasi wisata sosial budaya di Indonesia</p>
    </div>      
    <div class="row  my-5 align-items-center justify-content-center">
        @foreach ($items->take(8) as $item)
        <div class="col-8 col-lg-4 col-xl-3">
          <div class="card border-0 shadow flip-card" style="width: 18rem; position: relative; margin-bottom: 20px;">
              <div class="flip-card-inner">
                  <div class="flip-card-front">
                      <img src="img/fitur1.jpg" class="card-img-top" alt="...">
                      <div class="corner-text" style="position: absolute; bottom: 0; left: 0; z-index: 1; background-color: rgba(0, 145, 255, 0.5);">
                        <p class="text-white m-2">{{ $item->title }}</p>
                      </div>
                  </div>
                  <div class="flip-card-back">
                      <p class="p-2">{{ $item->description }}</p>
                  </div>
              </div>
          </div>
        </div>    
        @endforeach
    </div>
</div>
</section>

  {{-- fitur & layanan --}}
  <section id="fitur" class="bg-primary">
          <div class="container-lg">
            <div class="text-center">
              <h2 style="color: white">Layanan &amp; Fitur</h2>
              <hr style="height:2px;border-width:0;color:white;background-color:#ffffff">
              <p class="lead" style="color: white">Fitur dan Layanan terbaik kami berikan untuk Anda</p>
          </div>      
          <div class="row  my-5 align-items-center justify-content-center">
              <div class="col-8 col-lg-4 col-xl-3">
                <div class="card border-0 shadow" style="width: 18rem;">
                    <img src="img/fitur3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="text-center">
                            <h4><i class="bi bi-check2-circle"></i> Booking Langsung</h4>  
                            <p class="card-text">Booking langsung melalui website NusaJelajah dengan mudah dan cepat.</p>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="col-8 col-lg-4 col-xl-3">
                <div class="card border-0 shadow" style="width: 18rem;">
                    <img src="img/fitur1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="text-center">
                            <h4><i class="bi bi-check2-circle"></i> Gampang Nyarinya</h4>  
                            <p class="card-text">Dibekali dengan fitur Filter dan Searching untuk memudahkan pengguna dalam mencari tour wisata</p>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="col-8 col-lg-4 col-xl-3">
                <div class="card border-0 shadow" style="width: 18rem;">
                    <img src="img/fitur2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="text-center">
                            <h4><i class="bi bi-check2-circle"></i> Banyak pilihannya</h4>  
                            <p class="card-text">Pilihan tour wisata yang banyak dan beragam, disesuaikan dengan kebutuhan dan keinginan Anda</p>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

    {{-- partner --}}
    <section id="partner">
      <div class="container-lg">
        <div class="text-center">
          <h2 style="color: rgb(0, 0, 0)">Partner Kami</h2>
          <hr style="height:2px;border-width:0;color:rgb(0, 0, 0);background: rgb(0, 0, 0)">
          <p class="lead" style="color: black;">Partner tour wisata sosial budaya NusaJelajah</p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="lc-block">
              <div id="carouselLogos" class="carousel slide pt-5 pb-4" data-bs-ride="carousel">
                <div class="carousel-inner px-5">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-6 col-lg-2 align-self-center">
                        <img class="d-block w-100 px-3 mb-3" src="{{ asset('img/Garuda-Indonesia-Logo.png') }}" alt="garuda-indonesia-logo">
                      </div>
                      <div class="col-6 col-lg-2  align-self-center">
                        <img class="d-block w-100 px-3  mb-3" src="{{ asset('img/bank-bni-logo.png') }}" alt="bank-bni-logo">
                      </div>
                      <div class="col-6 col-lg-2  align-self-center">
                        <img class="d-block w-100 px-3  mb-3" src="{{ asset('img/dana.png') }}" alt="dana-logo">
                      </div>
                      <div class="col-6 col-lg-2  align-self-center">
                        <img class="d-block w-100 px-3  mb-3" src="{{ asset('img/wonderfull-indonesia.png') }}" alt="wonderfull-indonesia">
                      </div>
                      <div class="col-6 col-lg-2  align-self-center">
                        <img class="d-block w-100 px-3  mb-3" src="{{ asset('img/sheraton.png') }}" alt="sheraton-logo">
                      </div>
                      <div class="col-6 col-lg-2  align-self-center">
                        <img class="d-block w-100 px-3  mb-3" src="{{ asset('img/Lion-Air-Logo.png') }}" alt="lion-air-logo">
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-6 col-lg-2 align-self-center">
                        <img class="d-block w-100 px-3 mb-3" src="{{ asset('img/Garuda-Indonesia-Logo.png') }}" alt="garuda-indonesia-logo">
                      </div>
                      <div class="col-6 col-lg-2  align-self-center">
                        <img class="d-block w-100 px-3  mb-3" src="{{ asset('img/bank-bni-logo.png') }}" alt="bank-bni-logo">
                      </div>
                      <div class="col-6 col-lg-2  align-self-center">
                        <img class="d-block w-100 px-3  mb-3" src="{{ asset('img/dana.png') }}" alt="dana-logo">
                      </div>
                      <div class="col-6 col-lg-2  align-self-center">
                        <img class="d-block w-100 px-3  mb-3" src="{{ asset('img/wonderfull-indonesia.png') }}" alt="wonderfull-indonesia">
                      </div>
                      <div class="col-6 col-lg-2  align-self-center">
                        <img class="d-block w-100 px-3  mb-3" src="{{ asset('img/sheraton.png') }}" alt="sheraton-logo">
                      </div>
                      <div class="col-6 col-lg-2  align-self-center">
                        <img class="d-block w-100 px-3  mb-3" src="{{ asset('img/Lion-Air-Logo.png') }}" alt="lion-air-logo">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="w-100 px-3 text-center mt-4">
                  <a class="carousel-control-prev position-relative d-inline me-4" href="#carouselLogos" data-bs-slide="prev">
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="text-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                    </svg>
                    <span class="visually-hidden">Previous</span>
                  </a>
                  <a class="carousel-control-next position-relative d-inline" href="#carouselLogos" data-bs-slide="next">
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="text-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                    </svg>
                    <span class="visually-hidden">Next</span>
                  </a>
                </div>
              </div>
            </div><!-- /lc-block -->
          </div><!-- /col -->
        </div>
      </div>
  </div>
</section>

  {{-- Tentang Kami --}}
  <section id="tk" class="bg-primary">
      <div class="container-lg">
          <div class="text-center mt-3">
              <h2 style="color: white">Tentang Kami</h2>
              <hr style="height:2px;border-width:0;color:rgb(255, 255, 255);background-color:#ffffff">
              <p class="lead" style="color: white">Informasi mengenai NusaJelajah</p>
          </div>
          <div class="row mt-5">
              <div class="col-md-6">
                  <div class="left-image">
                      <img class="rounded" src="img/gambar_nusajelajah.png" alt="gambar-nusajelajah">
                  </div>
              </div>
              <div class="col-md-6">
                <div class="right-image">
                    <h4 style="color: white">Tentang NusaJelajah...</h4>
                    <br>
                    <div style="color: #FFFFFF;">
                      <p>
                        Nusajelajah adalah platform tur sosial budaya untuk pengalaman wisata berkelanjutan di Indonesia. Website ini menghubungkan destinasi wisata unik dengan komunitas lokal, memungkinkan wisatawan menjelajahi kekayaan budaya Indonesia.
                      </p>
                      <p>
                        Website Nusajelajah memberikan akses yang mudah bagi para wisatawan untuk menelusuri informasi tentang destinasi wisata yang unik dan beragam, serta menghadirkan pengalaman tur yang terhubung dengan komunitas lokal. Dengan fitur-fitur seperti panduan wisata yang informatif, pemesanan tur, dan akses ke komunitas lokal, Nusajelajah menjadi wadah yang menghubungkan para pelancong dengan keindahan dan kearifan budaya yang ada di berbagai daerah di Indonesia.
                     </p>
                      <p>
                        Dengan panduan wisata, pemesanan tur, dan akses ke komunitas, Nusajelajah mempromosikan keindahan budaya Indonesia. Melalui pendekatan berkelanjutan, platform ini juga mendukung pelestarian budaya dan lingkungan.
                      </p>
                   </div>
                </div>
            </div>
          </div>
      </div>
  </section>
  {{-- footer --}}
@include('frontend.templates.layouts.footer')
   
{{-- JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
 
 
      

