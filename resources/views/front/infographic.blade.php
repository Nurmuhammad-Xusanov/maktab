@extends('layouts.frontLayout')
@section('title')
    Infografika
@endsection
@section('style')
    <style>
        @media (max-width:412px) {
            .topMain-logo {
                position: absolute;
                top: 17%;
                right: 35%;
                color: black;
            }

            .additionalFuntions {
                position: absolute;
                top: 24%;
                right: 3%;
            }

            .infografika_content {
                grid-template-columns: none;
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
                            <h1 class="pageTitle text-dark">Infografika</h1>
                            <nav aria-label="breadcrumb">
                                <ol id="w5" class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Asosiy</a></li>
                                    <li class="breadcrumb-item " aria-current="page">Infografika</li>
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
                <div class="infografika">
                    <div class="container">
                        <div class="infografika_content">
                            <div class="item">
                                <a href="#">
                                    <div class="imageBox">
                                        <img src="/image/InfoGrafika-1.jpg">
                                    </div>
                                    <div class="descriptionBox">
                                        <h1>Axborot tizimlari va elektron resurslar</h1>
                                        <span>30 Mart 2022</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <div class="imageBox">
                                        <img src="/image/InfoGrafika-2.jpg">
                                    </div>
                                    <div class="descriptionBox">
                                        <h1>Axborot tizimlari va elektron resurslar</h1>
                                        <span>30 Mart 2022</span>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <div class="imageBox">
                                        <img src="/image/InfoGrafika-3.jpg">
                                    </div>
                                    <div class="descriptionBox">
                                        <h1>Axborot tizimlari va elektron resurslar</h1>
                                        <span>30 Mart 2022</span>
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
