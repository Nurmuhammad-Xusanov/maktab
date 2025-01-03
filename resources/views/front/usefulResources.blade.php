@extends('layouts.frontLayout')

@section('title')
    Foydali Resurslar
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

            .projectsList {
                grid-template-columns: unset;
            }

            .projectsList .item,
            .projectsList a.item {
                padding: 40px 0;
            }
        }
    </style>
@endsection

@section('content')
    <header>
        <div class="bannerBox">
            <x-header></x-header>
            <div class="mainContent withImage">
                <div class="imageHeader" style="padding-bottom: 0px;">
                    <div class="container">
                        <h1 class="pageTitle text-dark">Foydali resurslar</h1>
                        <nav aria-label="breadcrumb">
                            <ol id="w5" class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Asosiy</a></li>
                                <li class="breadcrumb-item " aria-current="page">Foydali resurslar</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section>
            <div class="useful-links">
                <div class="container">
                    <div class="projectsList">
                        @forelse ($resources as $resource)
                            <a class="item" href="{{ route('usefulresourcesDetails', ['id' => 1]) }}">
                                <div class="item">
                                    <img alt="logo" src="/image/Useful-links.jpg">
                                    <h3>{{ $resource['body'] }}</h3>
                                </div>
                            </a>
                        @empty
                            <p>Hozircha hech qanday foydali resurslar mavjud emas.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-footer></x-footer>
@endsection
