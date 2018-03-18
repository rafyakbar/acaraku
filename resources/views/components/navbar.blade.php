<nav class="pull">
    <ul class="nav">
        @if(Route::currentRouteName() == 'welcome')
            <li><a href="{{ url('login') }}">Login</a></li>
            <li><a href="{{ url('login') }}">Register</a></li>
            <li><a href="{{ route('tentang') }}">Tentang Kami</a></li>
            <li><a href="{{ route('kontak') }}">Kontak</a></li>
        @else
            <li><a>Hai, Rafy Aulia Akbar</a></li>
            <li><a href="{{ route('acaraku') }}">Acaraku</a></li>
            <li><a href="{{ route('buatacara') }}">Buat Acara</a></li>
            <li><a href="{{ route('mark') }}">Bookmark</a></li>
            <li><a href="{{ route('pengaturan') }}">Pengaturan</a></li>
            <li><a href="{{ route('tentang') }}">Tentang Kami</a></li>
            <li><a href="{{ route('kontak') }}">Kontak</a></li>
            <li><a href="{{ route('welcome') }}">Keluar</a></li>
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