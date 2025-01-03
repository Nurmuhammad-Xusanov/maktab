@extends('layouts.frontLayout')
@section('title')
    Izlash natijalari
@endsection
@section('style')
@endsection
@section('content')
    <header>
        <div class="bannerBox">
            <x-header></x-header>
            <div class="mainContent withImage">
                <div class="imageHeader" style="padding-bottom: 0px;">
                    <div class="container">
                        <h1 class="pageTitle text-dark">Izlash natijalari</h1>
                        <nav aria-label="breadcrumb">
                            <ol id="w5" class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{'home'}}">Asosiy</a></li>
                                <li class="breadcrumb-item " aria-current="page">Izlash natijalari</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Header End -->

    <!-- Main section Start -->
    <main>
        <section>
            <div class="search">
                <div class="container">
                    @if (!empty($query))
                        <p>"{{ $query }}" uchun natijalar:</p>
                        @if ($results->isEmpty())
                            <div class="emptyBox"><i class="fas fa-search"></i>
                                <p>Hech narsa topilmadi</p>
                            </div>
                        @else
                            <div class="imageCardBoxes">
                                <div class="row">
                                    @foreach ($results as $result)
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <a href="">
                                                <div class="imageBox">
                                                    <img alt="image" src="{{ asset($result->image) }}">
                                                </div>
                                                <h1>{{ $result->title }}
                                                </h1>
                                                <span>{{ $result->date }}</span>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    @else
                        <p>Qidiruv so'rovini kiriting.</p>
                    @endif
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
    <script src="js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/tilt.jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="/js/wow.min.js"></script>

    <!-- Js -->
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
