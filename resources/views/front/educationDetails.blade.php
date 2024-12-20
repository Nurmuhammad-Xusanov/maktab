@extends('layouts.frontLayout')
@section('title')
    To'garaklar
@endsection
@section('style')
    <style>
        @media (max-width:412px) {
            .topMain-logo {
                position: absolute;
                top: 18%;
                right: 35%;
                color: black;
            }

            .additionalFuntions {
                position: absolute;
                top: 25%;
                right: 3%;
            }

            .leaderInfo {
                display: block;
            }

            .leaderInfo .photo {
                width: 100%;
            }

            .leaderInfo .photo img {
                width: 100%;
                text-align: center;
            }

            .leaderInfo .description .staffTitle {
                font-size: 22px;
                margin: 62px 0;
                margin-bottom: 0;
                text-transform: uppercase;
            }

            .contactInfo span {
                font-size: 16px;
            }
        }

        @media (max-width:375px) {
            .topMain-logo {
                position: absolute;
                top: 13%;
                right: 35%;
                color: black;
            }

            .additionalFuntions {
                position: absolute;
                top: 25%;
                right: 3%;
            }

            .leaderInfo {
                display: block;
            }

            .leaderInfo .photo {
                width: 100%;
            }

            .leaderInfo .photo img {
                width: 100%;
                text-align: center;
            }

            .leaderInfo .description .staffTitle {
                font-size: 22px;
                margin: 17px 0;
                margin-bottom: 0;
                text-transform: uppercase;
            }

            .contactInfo span {
                font-size: 16px;
            }
        }
    </style>
@endsection
@section('content')

    <body>
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
                            <h1 class="pageTitle text-dark">To'garaklar batafsil</h1>
                            <nav aria-label="breadcrumb">
                                <ol id="w5" class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Asosiy</a></li>
                                    <li class="breadcrumb-item " aria-current="page">To'garaklar batafsil</li>
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
                <div class="leaderShip">

                    <!-- Togaraklar Detail -->
                    <div class="container">

                        <div class="leaderInfo">
                            <div class="photo">
                                <img alt="image" src="image/shaxmat.jpg" class="mt-5 me-4">
                            </div>

                            <div class="description">
                                <h1 class="staffTitle mb-4"><b class="me-1">Rustamova</b> Aziza<br> Zoirovna</h1>



                                <div class="contactInfo">
                                    <div>
                                        <i class="fa-solid fa-door-open"></i>
                                        <span>Dushanbadan - Jumagacha</span>
                                    </div>

                                    <div>
                                        <i class="far fa-clock"></i>
                                        <span>17:00 - 18:30</span>
                                    </div>

                                    <div>
                                        <i class="fas fa-phone-alt"></i>
                                        <a href="tel:998 99 871 25 13">998 99 871 25 13</a>
                                    </div>

                                    <div>
                                        <i class="fa-solid fa-child"></i>
                                        <a href="mailto:school329@xtv.uz">5-6 sinf</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="sections__line">


                </div>
            </section>
        </main>
        <!-- Main section End -->

        <!-- Footer Start  -->
        <x-footer></x-footer>
        <!-- Footer End -->
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
