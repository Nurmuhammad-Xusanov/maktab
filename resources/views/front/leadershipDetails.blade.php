@extends('layouts.frontLayout')
@section('title')
    Rahbariyat Batafsil
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
                        <h1 class="pageTitle text-dark">Rahbariyat batafsil</h1>
                        <nav aria-label="breadcrumb">
                            <ol id="w5" class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Asosiy</a></li>
                                <li class="breadcrumb-item " aria-current="page">Rahbariyat batafsil</li>
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

                <!-- Rahbariyat Detail -->
                <div class="container">

                    <div class="leaderInfo">
                        <div class="photo">
                            <img alt="image" src="{{asset($staff->image)}}">
                        </div>

                        <div class="description">
                            <h1 class="staffTitle"><b>Aripova</b><br> Umida<br> Djangirovna</h1>

                            <h2>Maktab direktori</h2>

                            <div class="contactInfo">
                                <div>
                                    <i class="far fa-clock"></i>
                                    <span>Chorshanba soat 16:00 dan 18:00 gacha</span>
                                </div>

                                <div>
                                    <i class="fas fa-phone-alt"></i>
                                    <a href="tel:998 99 871 25 13">998 99 871 25 13</a>
                                </div>

                                <div>
                                    <i class="far fa-envelope-open"></i>
                                    <a href="mailto:school329@xtv.uz">school329@xtv.uz</a>
                                </div>
                            </div>



                            <div class="collapseBox">
                                <a data-toggle="collapse" href="#collapseExample" role="button">Biografiya</a>

                                <div class="collapse" id="collapseExample">
                                    <div class="item">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste a,
                                        earum commodi accusantium officiis id.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="sections__line">


            </div>
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
