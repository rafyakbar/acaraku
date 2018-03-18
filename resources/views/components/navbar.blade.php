<nav class="pull">
    <ul class="nav">
        <li><a href="index.html" class="active"> Home</a></li>
        <li><a href="#about" class="scroll"> About</a></li>
        <li><a href="#portfolio" class="menu scroll">Popular Places<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
        <ul class="nav-sub">
            <li><a href="#portfolio" class="scroll">Place 1</a></li>
            <li><a href="#portfolio" class="scroll">Place 2</a></li>
            <li><a href="#portfolio" class="scroll">Place 3</a></li>
        </ul>
        <script>
            $( "li a.menu" ).click(function() {
                $( "ul.nav-sub" ).slideToggle( 300, function() {
                    // Animation complete.
                });
            });
        </script>
        <li><a href="#events" class="scroll"> Events</a></li>
        <li><a href="#mail" class="scroll"> Mail us</a></li>
    </ul>
</nav>