<!-- banner -->
<div class="banner">
    <div class="navigation">
        <div class="container-fluid">
            @include('components.navbar')
        </div>
    </div>
    <div class="header-top">
        <div class="container">
            <div class="head-logo">
                <a href="{{ route('welcome') }}"><span>A</span>cara<span>K</span>u<i>Hadiri acara secara gratis di sini</i></a>
            </div>
            <div class="top-nav">
                <div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
                    <a href="#"><img src="images/menu.png" alt=""></a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="banner-info">
        <div class="container">
            <h1>Cari acara yang kamu inginkan sekarang</h1>
            <div class="resp-tab-content resp-tab-content-active" style="display: block">
                <div class="facts">
                    @include('components.filter')
                </div>
            </div>
            <div class="login">
                <a href="{{ url('login')  }}">Login</a>
                <a href="{{ url('register') }}">Signup</a>
            </div>
        </div>
    </div>
</div>
<!-- //banner -->