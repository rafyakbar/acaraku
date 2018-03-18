<nav class="pull">
    <ul class="nav">
        @if(Route::currentRouteName() == 'welcome')
            <li><a href="{{ url('login') }}">Login</a></li>
            <li><a href="{{ url('login') }}">Register</a></li>
        @else
            <li><a>Hai, Rafy Aulia Akbar</a></li>
            <li><a href="{{ route('acaraku') }}">Acaraku</a></li>
            <li><a href="{{ route('buatacara') }}">Buat Acara</a></li>
            <li><a href="">Tiket</a></li>
            <li><a href="">Pengaturan</a></li>
            <li><a href="">Keluar</a></li>
        @endif
        <script>
            $( "li a.menu" ).click(function() {
                $( "ul.nav-sub" ).slideToggle( 300, function() {
                    // Animation complete.
                });
            });
        </script>
    </ul>
</nav>