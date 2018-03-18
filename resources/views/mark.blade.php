@extends('layouts.global')

@section('content')
    <div style="margin: 5%">
        <div class="row">
            <h3 class="text-center">Terdapat <b>123 acara yang ditandai</b></h3>
            <br>
            <div class="col-md-2"></div>
            <div class="col-md-8" style="padding-top: 22px">
                @for($c = 1; $c <= 10; $c++)
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-11">
                            <div class="about-grid">
                                <div class="about-grid1">
                                    <div class="itis">
                                        <p>Senin, 19 Maret 2018</p>
                                        <h4 style="color: #0C0C0C">Seminar Big Data dicoding {{ $c }}</h4>
                                    </div>
                                    <div class="hji">
                                        <p>Big Data adalah istilah yang menggambarkan volume data yang besar, baik data
                                            yang terstruktur maupun data yang tidak terstruktur. Big Data telah
                                            digunakan dalam banyak bisnis.</p>
                                        <br>
                                        <div class="btn-group">
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                            <a href="{{ route('detail') }}" class="btn btn-primary btn-sm">Lihat</a>
                                        </div>
                                    </div>
                                    <div class="about-grid1-pos">
                                        <img src="{{ asset('images/2.jpg') }}" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                @endfor
                <ul class="pagination">
                    <li><a href=""><<</a></li>
                    <li><a href=""><</a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">10</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">15</a></li>
                    <li><a href="">></a></li>
                    <li><a href="">>></a></li>
                </ul>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection