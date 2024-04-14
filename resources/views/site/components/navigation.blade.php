<div>
    <!-- Navigation Section -->
    <div class="navbar custom-navbar wow fadeInDown" data-wow-duration="2s" role="navigation" id="header">
        <div class="container">

            <!-- NAVBAR HEADER -->
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span
                        class="icon icon-bar"></span> <span class="icon icon-bar"></span> <span
                        class="icon icon-bar"></span> </button>
                <!-- lOGO TEXT HERE -->
                <a href="/" class="navbar-brand">Drive <span>Ease</span></a>
            </div>

            <!-- NAVIGATION LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">الرئيسية</a></li>
                    {{-- <li><a href="#cars" class="smoothScroll">Cars</a></li> --}}
                    <li><a href="{{ route('about-us.index') }}">نبذة عنا</a></li>
                    <li><a href="{{ route('services.index') }}" class="smoothScroll">الخدمات</a></li>
                    -
                    {{-- <li><a href="{{ route('blog.index') }}" class="smoothScroll">Blog</a></li> --}}
                    {{-- <li><a href="#team" class="smoothScroll">Support</a></li> --}}
                    {{-- <li><a href="#testimonials" class="smoothScroll">Clients</a></li> --}}
                    {{-- <li><a href="{{ route('contact') }}" class="smoothScroll">Contact</a></li> --}}



                    @guest
                        <li><a href="{{ route('login') }}">تسجيل الدخول</a></li>
                        <li><a href="{{ route('register') }}">تسجيل</a></li>
                    @endguest

                    @auth
                        <li> <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('frm-logout').submit();">
                                <button type="button" class="text-secondary-900 transition-colors hover:text-opacity-65">
                                    تسجيل الخروج
                                </button>
                            </a></li>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endauth

                </ul>
            </div>
        </div>
    </div>
</div>
