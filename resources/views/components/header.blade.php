<div class="headerBar">
    <div class="topMainMenu">
        <a href="{{ route('home') }}" class="topMain-logo">
            <img src="{{ asset('image/Gerb.png') }}" alt="" width="8%">
            <p>329-sonli umumta'lim maktabi </p>
        </a>
        <ul>
            <li>
                <a href="https://vacancy.argos.uz/">Bosh ish orinlari</a>
            </li>
            <li>
                <a href="{{route('schoolRules')}}">Maktab qonun-qoidalar</a>
            </li>
            <li>
                <a href="{{ route('faq') }}">Tez-tez beriladigan savollar </a>
            </li>
            <li>
                <a href="{{route('stateSymbols')}}">Davlat ramzlari</a>
            </li>
        </ul>
        <div class="additionalFuntions">
            <a href="#" class="eye"><i class="fa-regular fa-eye text-white me-2"></i></a>
            <a href="#" class="searchBtn text-white">|
                <i class="fa-solid fa-magnifying-glass text-white mb-3 ms-2"></i>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="headerMenuBox">
            <div class="bigMenuBtn">
                <button type="button" class="borderedBtn">
                    <div class="menuBars"></div>
                </button>
                <div class="overlay">
                    <div class="container">
                        <div class="topLogoGerb">
                            <img src="image/Gerb.png" alt="Logo" width="13%">
                        </div>
                        <div class="listMenu">
                            <ul>
                                <li><a href="#">Maktab haqida</a>
                                    <ul>
                                        <li><a href="{{route('schoolTasks')}}">Maktab vazifalari</a></li>
                                        <li><a href="{{ route('leadership') }}">Rahbariyat</a></li>
                                        <li><a href="{{route('teachers')}}">O'qituvchilar</a></li>
                                        <li><a href="{{ route('rekvizit') }}">Rekvizitlar</a></li>
                                    </ul>
                                <li><a href="{{ route('education') }}">Ta'lim</a>
                                    <ul>
                                        <li><a href="{{ route('education') }}">1-smena</a></li>
                                        <li><a href="{{ route('education') }}">2-smena</a></li>
                                        <li><a href="{{ route('education') }}">Qo'shimcha darslar </a></li>
                                        <li><a href="{{ route('education') }}">Sport to'garaklar</a></li>
                                    </ul>
                                <li><a href="{{ route('schoolNews') }}">Axborot markazi</a>
                                    <ul>
                                        <li><a href="{{ route('schoolNews') }}">Maktab yangiliklari</a></li>
                                        <li><a href="{{ route('gallery') }}">Galeriya</a></li>
                                        <li><a href="{{ route('infographic') }}">Infografika</a></li>
                                    </ul>
                            </ul>
                            <ul class="simple">
                                <li><a href="{{route('usefulresources')}}">Foydali resurslar</a></li>
                                <li><a href="connect.html">Bogʻlanish</a></li>
                            </ul>
                        </div>
                        <div class="topMainMenu2">
                            <ul>
                                <li><a href="https://vacancy.argos.uz/">Bo'sh ish o‘rinlari</a></li>
                                <li><a href="schoolNews.html">Maktab qonun-qoidalari</a></li>
                                <li><a href="{{ route('faq') }}">Tez-tez beriladigan savollar</a></li>
                                <li><a href="{{route('stateSymbols')}}">Davlat ramzlari</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="mainMenuBox">
                <div class="menuList">

                    <!--  -->
                    <div class="menuLine"></div>
                    <!--  -->
                    <div class="bottomMainMenu">
                        <ul class="menu">
                            <li>
                                <a href="" class="">Maktab haqida</a>
                                <ul class="menu_ul-li">
                                    <li>
                                        <a href="{{route('schoolTasks')}}">Maktab vazifalari</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a
                                            href="{{ route('leadership') }}">Rahbariyat</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="{{route('teachers')}}">O'qituvchilar</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="{{ route('rekvizit') }}">Rekvizitlar</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('education') }}">Ta'lim </a>
                                <ul class="menu_ul-li">
                                    <li>
                                        <a href="{{ route('education') }}">1-smena</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="{{ route('education') }}">2-smena</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="{{ route('education') }}">Qo'shimcha darslar</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="{{ route('education') }}">Sport to'garaklari</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a  href="{{route('usefulresources')}}">Foydali resurslar </a>
                            </li>
                            <li>
                                <a href="{{ route('schoolNews') }}">Axborot markazi </a>
                                <ul class="menu_ul-li">
                                    <li>
                                        <a href="{{ route('schoolNews') }}">Maktab yangiliklari</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="{{ route('gallery') }}">Galeriya</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="{{ route('infographic') }}">Infografika</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('connect') }}">Boglanish </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Search Start-->
                    <form id="w2" class="mainSearchForm" action="" method="get">
                        <div class="input-group">
                            <input type="text" id="mainSearch" class="form-control" placeholder="Izlash"
                                name="ContentSearch">

                            <div class="input-group-prepend">
                                <button class="btn __searchBtn closeBtn" type="button">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                    </form>
                    <!-- Search End-->

                    <div class="dropdown langBar">
                        <button class="borderedBtn" type="button" data-toggle="dropdown">O'z</button>
                        <div id="" class="dropdown-menu-right dropdown-menu">
                            <a class="dropdown-item " href="/Uz">O'zbekcha</a>
                            <a class="dropdown-item" href="/Ўзб">Ўзбекча</a>
                            <a class="dropdown-item" href="/Ru">Русский</a>
                            <a class="dropdown-item" href="/En">English</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="{{ asset('/js/tilt.jquery.js') }}"></script>
<script src="{{ asset('/js/wow.min.js') }}"></script>
<script src="{{ asset('/js/main.js') }}"></script>
