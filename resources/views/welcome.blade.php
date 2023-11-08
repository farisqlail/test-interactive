<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>InterActive</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    {{-- Section Header --}}
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box; ">
        <div class="container-xxl mx-auto p-0  position-relative header-2-1" style="font-family: 'Poppins', sans-serif">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="#">
                    <img style="margin-right: 0.75rem" src="{{ asset('assets/icons/interactive.png') }}"
                        alt="" />
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal"
                    data-bs-target="#targetModal-item">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
                    aria-labelledby="targetModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content bg-white border-0">
                            <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                                <a class="modal-title" id="targetModalLabel">
                                    <img style="margin-top: 0.5rem"
                                        src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-2.png"
                                        alt="" />
                                </a>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Produk</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Layanan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Tentang</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Kontak</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
                                <button class="btn btn-fill text-white">Masuk</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>
                    </ul>
                    <div class="gap-3">
                        <a href="{{route('login')}}" class="btn btn-fill text-white">Masuk</a>
                    </div>
                </div>
            </nav>

            <div>
                <div class="mx-auto d-flex flex-lg-row flex-column hero">
                    <!-- Left Column -->
                    <div
                        class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
                        <p class="text-caption">Tentang kita</p>
                        <span class="title-text-big">
                            {{$about->about}}
                        </span>
                        <div
                            class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
                            <button class="btn d-inline-flex mb-md-0 btn-try text-white">
                                Lihat selengkapnya
                            </button>
                        </div>
                    </div>
                    <!-- Right Column -->
                    <div class="right-column text-center d-flex justify-content-center pe-0">
                        <img id="img-fluid" class="h-auto mw-100"
                            src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-1.png"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End section header --}}

    {{-- Section produk --}}
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box;">
        <div class="content-3-1 container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="d-flex flex-lg-row flex-column align-items-center">
                <!-- Left Column -->
                <div class="img-hero text-center justify-content-center d-flex">
                    <img id="hero" class="img-fluid"
                        src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-1.png"
                        alt="" />
                </div>

                <!-- Right Column -->
                <div
                    class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
                    <h2 class="title-text">Produk unggulan kami</h2>
                    <ul class="p-0 m-0">
                        <li class="list-unstyled" style="margin-bottom: 2rem">
                            <h4
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span class="circle text-white d-flex align-items-center justify-content-center">
                                    1
                                </span>
                                Table Management System
                            </h4>
                            <p class="text-caption">
                                <b>InterActive MyProfit </b>
                                dilengkapi fitur Table Management untuk memudahkan kasir dalam mengatur waiting list, reservasi, check in - check out meja, pindah meja, gabung meja, batal meja, split bill, status meja, print dapur serta penyajian cepat dan akurat.
                            </p>
                        </li>
                        <li class="list-unstyled" style="margin-bottom: 2rem">
                            <h4
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span class="circle text-white d-flex align-items-center justify-content-center">
                                    2
                                </span>
                                Aplikasi Absensi Via Mobile
                            </h4>
                            <p class="text-caption">
                                <b>InTrax</b> adalah Mobile Attendance atau Aplikasi Absensi via mobile app yang <b>Terintegrasi Mesin Absensi dan Software Payroll</b>  di semua cabang Perusahaan yang terdapat fitur Pengajuan Ijin bagi Karyawan dan untuk dapat memonitor karyawan yang sedang WFH
                            </p>
                        </li>
                    </ul>
                    <button class="btn btn-learn text-white">Pelajari lebih lanjut</button>
                </div>
            </div>
        </div>
    </section>
    {{-- End section produk --}}


    {{-- Section Problem --}}
    <section class="adventages">
        <div class="container">
            <div class="row mx-0 text-center d-block">
                <div class="headline">
                  <span class="cl-light-orange font-red-hat-display">Masalah Yang Sering Terjadi </span> <br>
                    Pada Bisnis
                </div>
            </div>
            <div class="value row mx-0 d-flex justify-content-center justify-content-md-between">
                <div class="card">
                    <div class="card-body p-0">
                      <box-icon type='solid' size='lg' name='calculator'></box-icon>
                        <div class="card-desc">
                            <h4 class="card-title">Masih <span class="cl-light-orange">Manual</span></h4>
                            <p class="card-text">Transaksi Masih dilakukan manual dan belum online
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-0">
                      <box-icon name='book-reader' size='lg' ></box-icon>
                        <div class="card-desc">
                            <h4 class="card-title"> <span class="cl-light-orange">Kurangnya</span> Edukasi Digital</h4>
                            <p class="card-text">Kurangnya edukasi step by step dalam menjalankan sistem
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-0">
                      <box-icon name='book-reader' size='lg' ></box-icon>
                        <div class="card-desc">
                            <h4 class="card-title">Tidak Saling <span class="cl-light-orange">Terintegrasi</span></h4>
                            <p class="card-text">Sudah menggunakan sistem tapi semuanya tidak saling terintegrasi
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End section problem --}}

    {{-- Section layanan --}}
    <section class="content text-center">
        <div class="container">
            <div class="row content">
                <div class="col-12 px-md-0 my-auto">
                    <div class="headline mt-3">
                        Layanan
                        <span class="cl-light-orange">Interactive</span>
                    </div>
                    <div class="row benefits">
                        <div class="col-md-4 mt-md-0 mb-3">
                            <div class="rectangle mx-auto px-1">
                                <img src="https://interactive.co.id/product/images/assets/home/indeo_logo.png"
                                    alt="benefits-1" class="img-fluid">
                                <div class="headline-benefit">
                                  InterActive Design Studio
                                </div>
                                <div class="subheadline-benefit mt-2">
                                  Kami membantu <b> Membranding Produk Bisnis </b> Anda melalui Digital Agency dengan semangat Creativity Without Borders.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5 mt-md-0 mb-3">
                            <div class="rectangle mx-auto px-1">
                                <img src="https://interactive.co.id/product/images/assets/home/inspire_logo.png"
                                    alt="benefits-1" class="img-fluid">
                                <div class="headline-benefit">
                                    Finish The Quiz
                                </div>
                                <div class="subheadline-benefit mt-2">
                                  Perusahaan <b>Konsultan Manajemen</b> yang dibangun sejak tahun 2015 di bawah naungan PT. Interaktif Inspirasi Dunia.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5 mt-md-0 mb-3">
                            <div class="rectangle mx-auto px-1">
                                <img src="https://interactive.co.id/product/images/assets/home/logo-interactive-academy.png"
                                    alt="benefits-1" class="img-fluid">
                                <div class="headline-benefit">
                                    Interview
                                </div>
                                <div class="subheadline-benefit mt-2">
                                  InterActive Academy adalah suatu Lembaga Pelatihan Kompetensi di bawah naungan InterActive Group.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End section layanan --}}

    {{-- Section Subsribe --}}
    <section class="message-subscribe-us__ text-center position-relative">
        <h4 class="headline mb-4">
            Subscribe untuk dapatkan informasi terbaru
        </h4>
        <p class="sub-headline">
            Dapatkan informasi terbaru dari produk kami yang akan membantu kalian.
        </p>
        <div class="row mx-0 d-flex justify-content-center subscribe-us__ mt-5">
            <div class="form-subscribe">
                <div class="row">
                    <div class="col-8 px-0 px-md-3">
                        <div class="input-group d-flex align-items-center">
                            <div class="input-group-prepend">
                                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/mail.svg"
                                    alt="mail" class="img-fluid">
                            </div>
                            <input type="text" class="form-control border-0 input-text"
                                placeholder="Enter your email address" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-4 px-0 px-md-3">
                        <button class="btn btn-subscribe h-100">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End section Subscribe --}}

    {{-- Section footer --}}
    <section class="h-100 w-100 bg-footer" style="box-sizing: border-box">
        <div class="footer-2-1 container-xxl mx-auto position-relative p-0"
            style="font-family: 'Poppins', sans-serif">
            <div class="list-footer">
                <div class="row gap-md-0 gap-3">
                    <div class="col-lg-3 col-md-6">
                        <div class="">
                            <div class="list-space">
                                <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-2.png"
                                    alt="" />
                            </div>
                            <nav class="list-unstyled">
                                <li class="list-space">
                                    <a href="" class="list-menu">Home</a>
                                </li>
                                <li class="list-space">
                                    <a href="" class="list-menu">Produk</a>
                                </li>
                                <li class="list-space">
                                    <a href="" class="list-menu">Layanan</a>
                                </li>
                                <li class="list-space">
                                    <a href="" class="list-menu">Tentang</a>
                                </li>
                                <li class="list-space">
                                    <a href="" class="list-menu">Kontak</a>
                                </li>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h2 class="footer-text-title">Quick Link</h2>
                        <nav class="list-unstyled">
                            <li class="list-space">
                                <a href="" class="list-menu">Promo</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">Events</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">News</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">Blog</a>
                            </li>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h2 class="footer-text-title">Kontak Kami Surabaya</h2>
                        <nav class="list-unstyled">
                            <li class="list-space">
                                <a href="" class="list-menu">Jl. Ambengan No.85, Surabaya Pusat
                                  Senin - Jum'at: 08.30 WIB - 17.30 WIB
                                  Sabtu: 08.30 WIB - 15.00 WIB</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">Telp. 031-535.5353 (Hunting),</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">031-534.1876, <a href="" class="list-menu">031-535.5723 </a></a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">sales@interactive.co.id (Software), <a href="" class="list-menu">marketing@interactive.co.id (Hardware)</a></a>
                            </li>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h2 class="footer-text-title">Kontak Kami Jakarta</h2>
                        <nav class="list-unstyled">
                            <li class="list-space">
                                <a href="" class="list-menu">Jl. Lapangan Bola No. 5A, RT.3/RW.10, Kec. Kebun Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530 Senin - Jum'at: 08.30 WIB - 17.30 WIB</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">Telp. 021-5305.757</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">Wa. 0817-0368-7776</a>
                            </li>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="border-color info-footer">
                <div class="">
                    <hr class="hr" />
                </div>
                <div class="mx-auto d-flex flex-column flex-lg-row align-items-center footer-info-space gap-4">
                    <div class="d-flex title-font font-medium align-items-center gap-4">
                        <a href="">
                            <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="15" cy="15" r="15" fill="#C7C7C7" />
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M17.6648 9.65667H19.1254V7.11267C18.8734 7.078 18.0068 7 16.9974 7C14.8914 7 13.4488 8.32467 13.4488 10.7593V13H11.1248V15.844H13.4488V23H16.2981V15.8447H18.5281L18.8821 13.0007H16.2974V11.0413C16.2981 10.2193 16.5194 9.65667 17.6648 9.65667V9.65667Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="16" height="16" fill="white"
                                            transform="translate(7 7)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a href="">
                            <svg class="social-media-p" width="30" height="30" viewBox="0 0 30 30"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.8711 15C17.8711 16.5857 16.5857 17.8711 15 17.8711C13.4143 17.8711 12.1289 16.5857 12.1289 15C12.1289 13.4143 13.4143 12.1289 15 12.1289C16.5857 12.1289 17.8711 13.4143 17.8711 15Z"
                                    fill="#C7C7C7" />
                                <path
                                    d="M21.7144 9.92039C21.5764 9.5464 21.3562 9.20789 21.0701 8.93002C20.7923 8.64392 20.454 8.42374 20.0797 8.28572C19.7762 8.16785 19.3203 8.02754 18.4805 7.98932C17.5721 7.94789 17.2997 7.93896 14.9999 7.93896C12.6999 7.93896 12.4275 7.94766 11.5193 7.98909C10.6796 8.02754 10.2234 8.16785 9.92014 8.28572C9.54591 8.42374 9.2074 8.64392 8.92976 8.93002C8.64366 9.20789 8.42348 9.54617 8.28523 9.92039C8.16736 10.2239 8.02705 10.6801 7.98883 11.5198C7.9474 12.428 7.93848 12.7004 7.93848 15.0004C7.93848 17.3002 7.9474 17.5726 7.98883 18.481C8.02705 19.3208 8.16736 19.7767 8.28523 20.0802C8.42348 20.4545 8.64343 20.7927 8.92953 21.0706C9.2074 21.3567 9.54568 21.5769 9.91991 21.7149C10.2234 21.833 10.6796 21.9733 11.5193 22.0115C12.4275 22.053 12.6997 22.0617 14.9997 22.0617C17.3 22.0617 17.5723 22.053 18.4803 22.0115C19.3201 21.9733 19.7762 21.833 20.0797 21.7149C20.8309 21.4251 21.4247 20.8314 21.7144 20.0802C21.8323 19.7767 21.9726 19.3208 22.011 18.481C22.0525 17.5726 22.0612 17.3002 22.0612 15.0004C22.0612 12.7004 22.0525 12.428 22.011 11.5198C21.9728 10.6801 21.8325 10.2239 21.7144 9.92039V9.92039ZM14.9999 19.4231C12.5571 19.4231 10.5768 17.4431 10.5768 15.0002C10.5768 12.5573 12.5571 10.5773 14.9999 10.5773C17.4426 10.5773 19.4229 12.5573 19.4229 15.0002C19.4229 17.4431 17.4426 19.4231 14.9999 19.4231ZM19.5977 11.4361C19.0269 11.4361 18.5641 10.9733 18.5641 10.4024C18.5641 9.83159 19.0269 9.36879 19.5977 9.36879C20.1685 9.36879 20.6313 9.83159 20.6313 10.4024C20.6311 10.9733 20.1685 11.4361 19.5977 11.4361Z"
                                    fill="#C7C7C7" />
                                <path
                                    d="M15 0C6.717 0 0 6.717 0 15C0 23.283 6.717 30 15 30C23.283 30 30 23.283 30 15C30 6.717 23.283 0 15 0ZM23.5613 18.5511C23.5197 19.468 23.3739 20.094 23.161 20.6419C22.7135 21.7989 21.7989 22.7135 20.6419 23.161C20.0942 23.3739 19.468 23.5194 18.5513 23.5613C17.6328 23.6032 17.3394 23.6133 15.0002 23.6133C12.6608 23.6133 12.3676 23.6032 11.4489 23.5613C10.5322 23.5194 9.90601 23.3739 9.35829 23.161C8.78334 22.9447 8.26286 22.6057 7.83257 22.1674C7.39449 21.7374 7.05551 21.2167 6.83922 20.6419C6.62636 20.0942 6.48056 19.468 6.4389 18.5513C6.39656 17.6326 6.38672 17.3392 6.38672 15C6.38672 12.6608 6.39656 12.3674 6.43867 11.4489C6.48033 10.532 6.6259 9.90601 6.83876 9.35806C7.05505 8.78334 7.39426 8.26263 7.83257 7.83257C8.26263 7.39426 8.78334 7.05528 9.35806 6.83899C9.90601 6.62613 10.532 6.48056 11.4489 6.43867C12.3674 6.39679 12.6608 6.38672 15 6.38672C17.3392 6.38672 17.6326 6.39679 18.5511 6.4389C19.468 6.48056 20.094 6.62613 20.6419 6.83876C21.2167 7.05505 21.7374 7.39426 22.1677 7.83257C22.6057 8.26286 22.9449 8.78334 23.161 9.35806C23.3741 9.90601 23.5197 10.532 23.5616 11.4489C23.6034 12.3674 23.6133 12.6608 23.6133 15C23.6133 17.3392 23.6034 17.6326 23.5613 18.5511V18.5511Z"
                                    fill="#C7C7C7" />
                            </svg>
                        </a>
                        
                    </div>
                    <div class="mx-auto d-flex flex-wrap align-items-center justify-content-center gap-4">
                    </div>
                    <nav class="d-flex flex-lg-row flex-column align-items-center justify-content-center">
                        <p style="margin: 0">Test © {{ date("Y") }} Faris Rizqilail</p>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    {{-- End section footer --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>
