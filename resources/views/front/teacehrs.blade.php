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
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Asosiy</a></li>
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
                <div class="container">
                    <div class="row">
                        @foreach ($staff as $item)
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <a href="#" class="card h-100 text-center">
                                    <img src="{{ asset($item->image) }}" class="card-img-top"  style=" height: 70%; object-fit: cover;"  alt="Zam Director">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->first_name }} {{ $item->last_name }}</h5>
                                        <p class="card-text">{{ $item->profession->name }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
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
