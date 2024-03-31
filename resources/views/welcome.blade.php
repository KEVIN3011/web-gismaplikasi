@extends('layouts.layouts')

@section('content')
      @extends('route.routelogin')


        <body>

            <!-- Spinner Start -->
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->


            <!-- Topbar Start -->
            <div class="container-fluid bg-dark px-5 d-none d-lg-block">
                <div class="row gx-0 align-items-center" style="height: 45px;">
                    <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <a href="#" class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Jl. RumahSakit No. 4 Medan (20239)</a>
                            <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>081328273777(Pdt Ressort)</a>
                            <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>081397269700(Bendahara Huria)</a>
                            <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>081370872371(Sekretaris Huria)</a>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar End -->



                <!-- Carousel Start -->
                <div class="header-carousel owl-carousel">
                    <div class="header-carousel-item">
                        <img src="{{ asset('img/foto1.jpg') }}" class="img-fluid w-100" alt="Image">
                        <div class="carousel-caption">
                            <div class="carousel-caption-content p-3">
                                <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Selamat Datang Di Aplikasi Pemesanan Gedung Ibadah Sekolah Minggu</h5>
                                <h1 class="display-1 text-capitalize text-white mb-4">HKBP NOMMENSEN RESSORT PULU BRAYAN</h1>
                                <p class="mb-5 fs-5">Jl. RumahSakit No. 4 Medan (20239)
                                <p class="mb-5 fs-5">Silahkan Lakukan Registrasi dan Login Terlebih dahulu untuk Reservasi Gedung
                                </p>
                                <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                    <a href="https://youtu.be/rR_dDgAsJrQ?si=6uEwrYVSLlRZU-4P" class="btn btn-primary rounded-pill text-white py-3 px-5"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                                </div>
                        </div>
                    </div>
                    <div class="header-carousel-item">
                        <img src="{{ asset('img/fotogism6.jpg') }}" class="img-fluid w-100" alt="Image">
                        <div class="carousel-caption">
                            <div class="carousel-caption-content p-3">
                                <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Selamat Datang Di Aplikasi Pemesanan Gedung Ibadah Sekolah Minggu</h5>
                                <h1 class="display-1 text-capitalize text-white mb-4">Gedung Ibadah Sekolah Minggu </h1>
                                <p class="mb-5 fs-5 animated slideInDown">Silahkan Lakukan Registrasi dan Login Terlebih dahulu untuk Reservasi Gedung
                                </p>
                                <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                    <a href="https://www.youtube.com/live/l7oSbW879Ug?si=Cm4NE-AcG2kjxjkZ" class="btn btn-primary rounded-pill text-white py-3 px-5"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel End -->
            </div>
            <!-- Navbar & Hero End -->


            <a href="index.html" class="navbar-brand p-0">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded">
                               <div class="service-img rounded-top">
                                    <img src="{{ asset('img/fotopdt.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                               </div>
                                <div class="service-content rounded-bottom bg-light p-4">
                                    <div class="service-content-inner">
                                        <h5 class="mb-4">Pdt.D.R.P Simanjuntak</h5>
                                        <p class="mb-4">Pendeta Ressort HKBP NOMMENSEN RESSORT PULU BRAYAN</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item rounded">
                               <div class="service-img rounded-top">
                                    <img src="{{asset('img/fotopdt1.jpg')}}" class="img-fluid rounded-top w-100" alt="">
                               </div>
                                <div class="service-content rounded-bottom bg-light p-4">
                                    <div class="service-content-inner">
                                        <h5 class="mb-4">Pdt R.Hutagalung</h5>
                                        <p class="mb-4">Pendeta Fungsional HKBP NOMMENSEN RESSORT PULU BRAYAN</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item rounded">
                               <div class="service-img rounded-top">
                                    <img src="{{ asset('img/fotocpdt.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                               </div>
                                <div class="service-content rounded-bottom bg-light p-4">
                                    <div class="service-content-inner">
                                        <h5 class="mb-4">CPdt.JS. Br Sinaga</h5>
                                        <p class="mb-4">Calon Pendeta HKBP Nommensen

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="service-item rounded">
                               <div class="service-img rounded-top">
                                    <img src="{{ asset('img/fotosek.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                               </div>
                                <div class="service-content rounded-bottom bg-light p-4">
                                    <div class="service-content-inner">
                                        <h5 class="mb-4">St.H.Siregar</h5>
                                        <p class="mb-4">Sekretaris Huria HKBP NOMMENSEN RESSORT PULU BRAYAN</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded">
                               <div class="service-img rounded-top">
                                    <img src="img/service-5.jpg" class="img-fluid rounded-top w-100" alt="">
                               </div>
                                <div class="service-content rounded-bottom bg-light p-4">
                                    <div class="service-content-inner">
                                        <h5 class="mb-4">St.Mt.Tarihoran</h5>
                                        <p class="mb-4">Bendahara Huria HKBP NOMMENSEN RESSORT PULU BRAYAN</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="{{ asset('img/parhalado.jpg') }}" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Parhalado</h5>
                                    <p class="mb-4">     Huria HKBP NOMMENSEN RESSORT PULU BRAYAN</p>

                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
            <!--parhalado end -->

               <!-- Fotogereja Start -->
               <div class="container-fluid blog py-5">
                <div class="container py-5">
                    <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="sub-style">
                            <h4 class="sub-title px-3 mb-0">Foto Gereja</h4>
                        </div>
                        <h1 class="display-3 mb-4">HKBP NOMMENSEN RESSORT PULU BRAYAN</h1>
                        <p class="mb-0">Dokumentasi Foto HKBP NOMMENSEN RESSORT PULU BRAYAN</p>
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="blog-item rounded">
                                <div class="blog-img">
                                    <img src="{{ asset('img/foto1.jpg') }}" class="img-fluid w-100" alt="Image">
                                </div>
                                <div class="blog-centent p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                    </div>
                                    <a href="#" class="h4">Gedung HKBP NOMMENSEN RESSORT PULU BRAYAN</a>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4 justify-content-center">
                            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="blog-item rounded">
                                    <div class="blog-img">
                                        <img src="{{ asset('img/foto2.jpg') }}" class="img-fluid w-100" alt="Image">
                                    </div>
                                    <div class="blog-centent p-4">
                                        <div class="d-flex justify-content-between mb-4">
                                        </div>
                                        <a href="#" class="h4">Gedung HKBP NOMMENSEN RESSORT PULU BRAYAN</a>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="blog-item rounded">
                                <div class="blog-img">
                                    <img src="{{ asset('img/foto3.jpg') }}" class="img-fluid w-100" alt="Image">
                                </div>
                                <div class="blog-centent p-4">
                                    <div class="d-flex justify-content-between mb-4">
                                    </div>
                                    <a href="#" class="h4">Gedung HKBP NOMMENSEN RESSORT PULU BRAYAN</a>
                                </div>
                </div>
            </div>
            <h1 class="display-3 mb-4">Jadwal Ibadah Gereja HKBP NOMMENSEN RESSORT PULU BRAYAN</h1>
                        <p class="mb-0">Sabtu  : 19.30-selesai PHD Remaja Naposobulung</p>


                        <p class="mb-0">Minggu :08.00-09.30 Ibadah Anak Sekolah Minggu</p>

                        <p class="mb-0">Minggu : 08.00-09.30 Ibadah Minggu Pagi</p>
                        <p class="mb-0">Minggu : 10.00-11.50 Ibadah Minggu Siang</p>
                        <p class="mb-0">Minggu : 17.00-18.30 Ibadah Minggu Sore</p>


                    </div>
            <!-- Fotogereja End -->




@endsection





