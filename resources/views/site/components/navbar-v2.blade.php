<style>
    body {
        padding: 0px;
        margin: 0px;
    }

    .navbar {
        position: relative;
        display: flex;
        padding: 10px 0px;
        background-color: #FFF;
        justify-content: space-around;
        align-items: center;
        /* box-shadow: 7px 5px 15px -4px rgba(0, 0, 0, 0.75);
        -webkit-box-shadow: 7px 5px 15px -4px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 7px 5px 15px -4px rgba(0, 0, 0, 0.75); */
    }

    .nav-items>ul>li {
        position: relative;
        display: inline;
        list-style: none;
        margin: 10px;
        padding: 10px 20px;
        cursor: pointer;
    }

    .nav-items>ul>li>a {
        color: #141214;
        text-decoration: none;
    }

    .nav-items>ul>li::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 0.17rem;
        background-color: #313E56;
        left: 0;
        bottom: 0;
        transform-origin: 0% 100%;
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .nav-items>ul>li:hover::after {
        transform: scaleX(1);
    }

    .nav-logo a,
    .nav-button a {
        color: #141214;
        list-style: none;
        text-decoration: none;
        display: flex;
    }

    .nav-logo {
        font-size: 32px;
    }

    .nav-button {
        background-color: #313E56;
        border-radius: 50px;
        position: relative;
        display: inline-block;
        overflow: hidden;
        cursor: pointer;
    }

    .anim-layer {
        position: absolute;
        top: 0;
        left: 50%;
        width: 0;
        height: 100%;
        background-color: white;
        transition: width 0.3s ease, left 0.3s ease;
    }

    .nav-button:hover .anim-layer {
        width: 100%;
        left: 0;
    }

    .nav-button:hover a {
        color: #141214;
    }

    .nav-button a {
        display: block;
        padding: 10px 20px;
        color: white;
        text-decoration: none;
        position: relative;
        z-index: 1;
    }

    .navbar-brand {
        font-weight: bold;
        font-size: 32px;
        line-height: 35px;
        color: #313E56 !important;
    }

    .navbar-brand span {
        color: #313E56 !important;
    }

    #hamburger-menu,
    #mobile-menu {
        display: none;
    }

    @media only screen and (max-width: 770px) {
        #mobile-menu {
            background-color: #313E56;
            width: 100%;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            display: none;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            transition: transform 0.3s ease;
            transform: translateX(-100%);
        }

        .mobile-nav-items>ul {
            padding: 0px;
        }

        .mobile-nav-items>ul>li {
            text-align: center;
            position: relative;
            list-style: none;
            margin: 10px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .mobile-nav-items>ul>li>a {
            color: white;
            text-decoration: none;
        }

        .mobile-nav-items>ul>li::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 0.17rem;
            background-color: white;
            left: 0;
            bottom: 0;
            transform-origin: 0% 100%;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .mobile-nav-items>ul>li:hover::after {
            transform: scaleX(1);
        }

        .mobile-nav-button {
            background-color: #141214;
            border-radius: 50px;
            position: relative;
            display: inline-block;
            overflow: hidden;
            cursor: pointer;
        }

        .mobile-nav-button .anim-layer {
            position: absolute;
            top: 0;
            left: 50%;
            width: 0;
            height: 100%;
            background-color: white;
            transition: width 0.3s ease, left 0.3s ease;
        }

        .mobile-nav-button:hover .anim-layer {
            width: 100%;
            left: 0;
        }

        .mobile-nav-button:hover a {
            color: #141214;
        }

        .mobile-nav-button a {
            display: block;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            position: relative;
            z-index: 1;
        }

        .nav-items>ul,
        .nav-button {
            display: none;
        }

        #hamburger-cross {
            display: block;
            color: white;
            cursor: pointer;
            font-size: 40px;
            position: absolute;
            top: 20px;
            right: 26px;
        }

        #hamburger-menu {
            display: block;
            color: white;
            cursor: pointer;
            font-size: 24px;
        }
    }
</style>

<div class="navbar">
    <div class="nav-logo">
        <a href="/" class="navbar-brand">Drive <span>Ease</span></a>
    </div>
    <div class="nav-items">
        <ul>
            <li><a href="/">الرئيسية</a></li>
            <li><a href="{{ route('services.index') }}" class="smoothScroll">الخدمات</a></li>
            <li><a href="{{ route('about-us.index') }}">نبذة عنا</a></li>
            <li><a href="{{ route('blog.index') }}" class="smoothScroll">المدونات</a></li>
            <li><a href="{{ route('contact') }}" class="smoothScroll">تواصل معانا</a></li>
        </ul>
    </div>
    {{-- <div class="nav-button">
        <div class="anim-layer"></div>
        <a href="#">Sign Up</a>
    </div> --}}

    @guest
        <div class="flex justify-center gap-2 m-2">
            <div class="nav-button" style="margin: 4px">
                <div class="anim-layer"></div>
                <a href="{{ route('login') }}">تسجيل الدخول</a>
            </div>
            <div class="nav-button" style="margin: 4px">
                <div class="anim-layer"></div>
                <a href="{{ route('register') }}">تسجيل</a>
            </div>
        </div>
    @endguest

    @auth
        <div class="nav-button">
            <div class="anim-layer"></div>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('frm-logout').submit();">
                <button type="button" class="text-secondary-900 transition-colors hover:text-opacity-65">
                    تسجيل الخروج
                </button>
            </a>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>

    @endauth

    <div id="hamburger-menu">&#9776;</div>
</div>

<div id="mobile-menu">
    <div class="mobile-nav-items">
        <ul>
            <li><a href="/">الرئيسية</a></li>
            <li><a href="{{ route('services.index') }}" class="smoothScroll">الخدمات</a></li>
            <li><a href="{{ route('about-us.index') }}">نبذة عنا</a></li>
            <li><a href="{{ route('blog.index') }}" class="smoothScroll">Blog</a></li>
            <li><a href="{{ route('contact') }}" class="smoothScroll">تواصل معانا</a></li>
        </ul>
    </div>
    @guest
        <div class="flex justify-center gap-2 m-2">
            <div class="nav-button" style="margin: 4px">
                <div class="anim-layer"></div>
                <a href="{{ route('login') }}">تسجيل الدخول</a>
            </div>
            <div class="nav-button" style="margin: 4px">
                <div class="anim-layer"></div>
                <a href="{{ route('register') }}">تسجيل</a>
            </div>
        </div>
    @endguest

    @auth
        <div class="nav-button">
            <div class="anim-layer"></div>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('frm-logout').submit();">
                <button type="button" class="text-secondary-900 transition-colors hover:text-opacity-65">
                    تسجيل الخروج
                </button>
            </a>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    @endauth
</div>
