@extends('layouts.frontLayout')
@section('title')
    O'qituvchilar
@endsection
@section('style')
    <style>
        @media (max-width:412px) {
            .topMain-logo {
                position: absolute;
                top: 14%;
                right: 35%;
                color: black;
            }

            .additionalFuntions {
                position: absolute;
                top: 24%;
                right: 3%;
            }
        }
    </style>
@endsection
@section('content')

   
        <!-- Header Start -->
        <header>
            <div class="bannerBox">
                <!-- Header Nav Start -->
                <x-header></x-header>
                <!-- Header Nav End -->

                <!-- Image Header Start-->
                <div class="mainContent withImage">
                    <div class="imageHeader" style="padding-bottom: 0px;">
                        <div class="container">
                            <h1 class="pageTitle text-dark">O'qituvchilar</h1>
                            <nav aria-label="breadcrumb">
                                <ol id="w5" class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Asosiy</a></li>
                                    <li class="breadcrumb-item " aria-current="page">O'qituvchilar</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Image Header End -->

            </div>
        </header>
        <!-- Header End -->

        <!-- Main section Start -->
        <main>
            <section>
                <div class="teachers">
                    <!-- oliy toifali oqtuvchilar -->
                    <div class="container deputy_director">
                        <h1 class="teachers__title mini mb-4">Oliy toifali o'qituvchilar</h1>
                        <div class="row">
                            <div class="col-lg-4 col-md-3 col-sm-6">
                                <a href="#" class="deputy_director-main">
                                    <img src="/image/Teachers.jpg" width="90%" alt="Zam Director">
                                    <div class="deputy_director-details">
                                        <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                        <span>Zam direktor</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-6">
                                <a href="#" class="deputy_director-main">
                                    <img src="/image/Teachers.jpg" width="90%" alt="Zam Director">
                                    <div class="deputy_director-details">
                                        <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                        <span>M'anaviyatchi</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-6">
                                <a href="#" class="deputy_director-main">
                                    <img src="/image/Teachers.jpg" width="90%" alt="Zam Director">
                                    <div class="deputy_director-details">
                                        <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                        <span>Bo'lim boshlig'i</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Birinchi toifali oqtuvchilar -->
                    <div class="container deputy_director">
                        <h1 class="teachers__title mini mb-4">Birinchi toifali o'qituvchilar</h1>
                        <div class="row">
                            <div class="col-lg-4 col-md-3 col-sm-6">
                                <a href="#" class="deputy_director-main">
                                    <img src="/image/Teachers.jpg" width="90%" alt="Zam Director">
                                    <div class="deputy_director-details">
                                        <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                        <span>Zam direktor</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-6">
                                <a href="#" class="deputy_director-main">
                                    <img src="/image/Teachers.jpg" width="90%" alt="Zam Director">
                                    <div class="deputy_director-details">
                                        <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                        <span>M'anaviyatchi</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-6">
                                <a href="#" class="deputy_director-main">
                                    <img src="/image/Teachers.jpg" width="90%" alt="Zam Director">
                                    <div class="deputy_director-details">
                                        <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                        <span>Bo'lim boshlig'i</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Ikkinchi toifali oqtuvchilar -->
                    <div class="container deputy_director">
                        <h1 class="teachers__title mini mb-4">Ikkinchi toifali o'qituvchilar</h1>
                        <div class="row">
                            <div class="col-lg-4 col-md-3 col-sm-6">
                                <a href="#" class="deputy_director-main">
                                    <img src="/image/Teachers.jpg" width="90%" alt="Zam Director">
                                    <div class="deputy_director-details">
                                        <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                        <span>Zam direktor</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-6">
                                <a href="#" class="deputy_director-main">
                                    <img src="/image/Teachers.jpg" width="90%" alt="Zam Director">
                                    <div class="deputy_director-details">
                                        <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                        <span>M'anaviyatchi</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-6">
                                <a href="#" class="deputy_director-main">
                                    <img src="/image/Teachers.jpg" width="90%" alt="Zam Director">
                                    <div class="deputy_director-details">
                                        <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                        <span>Bo'lim boshlig'i</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Mutaxasis toifali oqtuvchilar -->
                    <div class="container deputy_director">
                        <h1 class="teachers__title mini mb-4">Mutaxassis toifali o'qituvchilar</h1>
                        <div class="row">
                            <div class="col-lg-4 col-md-3 col-sm-6">
                                <a href="#" class="deputy_director-main">
                                    <img src="/image/Teachers.jpg" width="90%" alt="Zam Director">
                                    <div class="deputy_director-details">
                                        <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                        <span>Zam direktor</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-6">
                                <a href="#" class="deputy_director-main">
                                    <img src="/image/Teachers.jpg" width="90%" alt="Zam Director">
                                    <div class="deputy_director-details">
                                        <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                        <span>M'anaviyatchi</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-6">
                                <a href="#" class="deputy_director-main">
                                    <img src="/image/Teachers.jpg" width="90%" alt="Zam Director">
                                    <div class="deputy_director-details">
                                        <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                        <span>Bo'lim boshlig'i</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Main section End -->

        <!-- Footer Start  -->

        <x-footer></x-footer>
        <!-- Footer End -->

    </body>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(".searchBtn").click(function(e) {
                e.preventDefault();
                $(".mainSearchForm").toggleClass("active");
            });

            $(".closeBtn").click(function(e) {
                e.preventDefault();
                $(".mainSearchForm").removeClass("active");
            });

            const bigMenuBtn = document.querySelector('.bigMenuBtn');
            const overlay = document.querySelector('.overlay');

            bigMenuBtn.addEventListener('click', function() {
                this.classList.toggle('active');
                overlay.classList.toggle('active');
                document.body.classList.toggle('no-scroll');
            });


            $('.js-tilt').tilt({
                scale: 1.2
            })

        });
    </script>
@endsection
