@extends('layouts.layouts')

@section('content')
<!-- penjelasansingkat Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Reservasi Gedung</h4>
            </div>
            <h1 class="display-3 mb-4"> Form Pemesanan Gedung</h1>
            <p class="mb-0">.</p>

            <head>
                <!-- Required meta tags -->
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

                <title>Bootstrap Form Tutorial</title>
              </head>

              <body class="container bg-light">
                <!-- Start Header form -->
                <div class="text-center pt-5">
                  <img src="{{ asset('img/fotogism2.jpg') }}" alt="network-logo" width="300" height="300" />
                  <h2>Form Reservasi Gedung</h2>
                  <p>
                    Silahkan Input data untuk Melakukan Reservasi Gedung
                  </p>
                </div>
                <!-- End Header form -->

                <!-- Start Card -->
                <div class="card">
                  <!-- Start Card Body -->
                  <div class="card-body">
                    <!-- Start Form -->
                    <form id="bookingForm" action="#" method="" class="needs-validation" novalidate autocomplete="off">
                      <!-- Start Input Name -->
                      <div class="form-group">
                        <label for="inputName">Nama Lengkap</label>
                        <input type="text" class="form-control" id="inputName" name="name" placeholder="Your name" required />
                        <small class="form-text text-muted">Please fill your name</small>
                      </div>
                      <!-- End Input Name -->

                      <!-- Start Input Email -->
                      <div class="form-group">
                        <label for="inputEmail">No Telp</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
                        <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <!-- End Input Email -->

                      <!-- Start Input Telephone -->
                      <div class="form-group">
                        <label for="inputPhone">Alamat Lengkap</label>
                        <input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="Alamat Lengkap" pattern="\d{3}\d{3}\d{4}" required />
                        <small class="form-text text-muted">We'll never share your phone number with anyone else.</small>
                      </div>
                      <!-- End Input Telephone -->

                       <!-- Start Input Telephone -->
                       <div class="form-group">
                        <label for="inputPhone">Sektor</label>
                        <input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="Sektor di Gereja" pattern="\d{3}\d{3}\d{4}" required />
                        <small class="form-text text-muted">We'll never share your phone number with anyone else.</small>
                      </div>
                      <!-- End Input Telephone -->

                      <!-- Start Input Date , Start Time and End Time -->
                      <div class="form-row">
                        <!-- Start Input Date -->
                        <div class="form-group col-md-4">
                          <label for="inputDate">Tanggal Pemesanan</label>
                          <input type="date" class="form-control" id="inputDate" name="date" required />
                          <small class="form-text text-muted">Please choose date and time for meeting.</small>
                        </div>
                        <!-- End Input Date -->
                      </div>
                      <!-- End Input Date , Start Time and End Time -->

                      <!-- Start Check Room Type -->
                      <div class="form-group">
                        <legend class="col-form-label pt-0">Status Jemaat</legend>
                        <div class="form-check form-check-inline">
                          <input type="radio" class="form-check-input" id="inlineRadioType1" name="roomType" value="type1" required />
                          <label class="form-check-label" for="inlineRadioType1">Ruas HKBP Nommensen Pulu brayan</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input type="radio" class="form-check-input" id="inlineRadioType2" name="roomType" value="type2" required />
                          <label class="form-check-label" for="inlineRadioType2">Non Ruas HKBP Nommensen Pulu brayan</label>
                        </div>

                      <!-- End Check Room Type -->
                       <!-- Start Input Telephone -->
                       <div class="form-group">
                        <label for="inputPhone">Status Pembayaran</label>
                        <input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="pembayaran" pattern="\d{3}\d{3}\d{4}" required />
                        <small class="form-text text-muted">We'll never share your phone number with anyone else.</small>
                      </div>
                      <!-- End Input Telephone -->

                      <hr />


                      <!-- Start Input Remark -->
                      <div class="form-group">
                        <label for="textAreaRemark">Catatan</label>
                        <textarea class="form-control" name="remark" id="textAreaRemark" rows="2" placeholder="Jika ada tambahan mohon diisi"></textarea>
                      </div>
                      <!-- End Input Remark -->

                      <!-- Start Submit Button -->
                      <button class="btn btn-primary btn-block col-lg-2" type="submit">Submit</button>
                      <!-- End Submit Button -->
                    </form>
                    <!-- End Form -->
                  </div>
                  <!-- End Card Body -->
                </div>
                <!-- End Card -->
                <footer>
                  <div class="my-4 text-muted text-center">
                    <p>© Aplikasi Reservasi Gedung Ibadah Sekolah Minggu</p>
                  </div>
                </footer>

                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

                <!-- Start Scritp for Form -->
                <script>
                  // Example starter JavaScript for disabling form submissions if there are invalid fields
                  (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                      // Fetch all the forms we want to apply custom Bootstrap validation styles to
                      var forms = document.getElementsByClassName('needs-validation');
                      // Loop over them and prevent submission
                      var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                          if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                          }
                          form.classList.add('was-validated');
                        }, false);
                      });
                    }, false);
                  })();
                </script>
                <!-- End Scritp for Form -->

              </body>

        </div>
