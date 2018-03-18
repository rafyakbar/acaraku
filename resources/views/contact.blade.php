@extends('layouts.global')

@section('content')
    <!--contact-->
    <div id="mail" class="contact">
        <div class="container">
            <h3>Hubungi Kami</h3>
            <p class="ever">Berikan kritik dan saranmu. Saran terbaik akan kami beri reward.</p>
            <div class="contact-grids">
                <div class="col-md-7 contact-right">
                    <form>
                        <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nama';}" required="">
                        <input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                        <input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
                        <textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Kritik & Saran...';}" required="">Kritik & Saran...</textarea>
                        <input type="submit" value="Kirim" >
                    </form>
                </div>
                <div class="col-md-5 contact-left">
                    <p>"Lorem Ipsum"is the common name dummy text often used in the design, printing, and type setting industriescommon name dummy text often used in the design, printing, and type setting industries. "</p>
                    <ul>
                        <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                            Jl Margorejo Indah, Wonocolo Utara, Surabaya, Jawa Timur.
                        </li>
                        <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                            +62 877 8989 1729
                        </li>
                        <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                            <a href="mailto:info@example.com">cs@acaraku.com</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--//contact-->
@endsection