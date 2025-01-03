@extends('layouts.frontLayout')
@section('title')
    Maktab yangiliklari
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
                top: 24%;
                right: 3%;
            }

            .navigationTabs {
                grid-template-columns: unset;
                margin: 0;
            }

            .navigationTabs a {
                margin: 20px 0;
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
                            <h1 class="pageTitle text-dark">Yangiliklar</h1>
                            <nav aria-label="breadcrumb">
                                <ol id="w5" class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Asosiy</a></li>
                                    <li class="breadcrumb-item " aria-current="page">Yangiliklar</li>
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
                <div class="schoolNews">
                    <div class="container">
                        <div class="navigationTabs">
                            <a href="#tab1" class="active" data-bs-toggle='tab' role="tab">
                                <i class="fas fa-newspaper"></i> Yangiliklar
                            </a>
                            <a href="#tab2" class="" data-bs-toggle="tab" role="tab">
                                <i class="fas fa-bullhorn"></i> E'lonlar
                            </a>
                        </div>

                        <div class="tab-content">
                            <!-- Content for Yangiliklar tab -->
                            <div class="tab-pane fade active show" id="tab1" role="tabpanel" aria-selected="true">
                                <div class="imageCardBoxes">
                                    <div class="row">

                                        @foreach ($posts as $post)
                                            <div class="col-xl-4 col-lg-4 col-md-6">
                                                <a href="">
                                                    <div class="imageBox">
                                                        <img alt="image" src="{{ asset($post->image) }}">
                                                    </div>
                                                    <h1>{{ $post->title }}
                                                        {{-- <p>{{ $post->description }}</p> --}}
                                                    </h1>
                                                    <span>{{ $post->date }}</span>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- Content for E'lonlar tab -->
                            <div class="tab-pane fade" id="tab2" role="tabpanel">
                                <div class="imageCardBoxes">
                                    <a href="">
                                        <div class="imageBox">
                                            <img alt="image" src="/image/329-maktab.jpg">
                                        </div>
                                        <h1>Rossiya universitetlarida taʼlim olmoqchimisiz? Unda koʻrgazmaga marhamat!</h1>
                                        <span>04 Oktabr 2021</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>
        <!-- Main section End -->

        <!-- Footer Start  -->
        <x-footer></x-footer> <!-- Footer End -->
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
            document.addEventListener("DOMContentLoaded", function() {
                var hash = window.location.hash; // URL'dagi hash'ni olish (#tab1, #tab2)

                if (hash) {
                    var targetTab = document.querySelector('[href="' + hash + '"]'); // Mos tab tugmasini topish
                    if (targetTab) {
                        // Bootstrap tabni ko'rsatish
                        var tab = new bootstrap.Tab(targetTab);
                        tab.show();
                    }
                }

                // Hash o'zgarganda tabni almashtirish
                window.addEventListener("hashchange", function() {
                    var hash = window.location.hash;
                    var targetTab = document.querySelector('[href="' + hash + '"]');
                    if (targetTab) {
                        var tab = new bootstrap.Tab(targetTab);
                        tab.show();
                    }
                });
            });
        </script>
    @endsection
