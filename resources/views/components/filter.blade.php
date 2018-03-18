<div class="booking-form">
    <div class="book_date">
        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        <input type="text" placeholder="Cari event . . ." class="typeahead1 input-md form-control tt-input" required="">
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <h5>Provinsi</h5>
            {{--<br>--}}
            <select class="form-control fix-padding">
                <option>Semua</option>
            </select>
        </div>
        <div class="col-md-6">
            <h5>Kabupaten</h5>
            {{--<br>--}}
            <select class="form-control fix-padding">
                <option>Semua</option>
            </select>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <h5>Kategori</h5>
            {{--<br>--}}
            <select class="form-control fix-padding">
                <option>Semua</option>
            </select>
        </div>
        <div class="col-md-6">
            <h5>Tanggal</h5>
            {{--<br>--}}
            <input type="text" class="form-control fix-padding" id="awal">
        </div>
        <script>
            $('#awal').bootstrapMaterialDatePicker({weekStart: 0, time: false});
        </script>
    </div>
</div>
<br>
<a href="{{ route('hasil') }}" style="width: 100%" class="btn btn-warning btn-lg">Cari</a>
{{--<div class="sap_tabs">--}}
{{--<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">--}}
{{--<ul class="resp-tabs-list">--}}
{{--<li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab"><span><i class="glyphicon glyphicon-home" aria-hidden="true"></i>Hotels</span></li>--}}
{{--<li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span><i class="glyphicon glyphicon-plane" aria-hidden="true"></i>Flights</span></li>--}}
{{--<li class="resp-tab-item grid3" aria-controls="tab_item-2" role="tab"><span><i class="glyphicon glyphicon-bed" aria-hidden="true"></i>Cars</span></li>--}}
{{--<li class="resp-tab-item grid5" aria-controls="tab_item-3" role="tab"><span><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Destinations</span></li>--}}
{{--<div class="clear"></div>--}}
{{--</ul>--}}
{{--<div class="resp-tabs-container">--}}

{{--<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">--}}
{{--<div class="facts">--}}
{{--<div class="booking-form">--}}
{{--<div class="online_reservation">--}}
{{--<div class="b_room">--}}
{{--<div class="booking_room">--}}
{{--<div class="reservation">--}}
{{--<ul>--}}
{{--<li  class="span1_of_1 desti">--}}
{{--<div class="book_date">--}}
{{--<form>--}}
{{--<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>--}}
{{--<input type="text" placeholder="Departure City or Hotel" class="typeahead1 input-md form-control tt-input" required="">--}}
{{--</form>--}}
{{--</div>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--<div class="reservation">--}}
{{--<ul>--}}
{{--<li  class="span1_of_1">--}}
{{--<h5>Check In</h5>--}}
{{--<div class="book_date">--}}
{{--<div class="book_date">--}}
{{--<form>--}}
{{--<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>--}}
{{--<input class="date" id="datepicker" type="text" value="19/10/2015" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '19/10/2015';}" required="">--}}
{{--</form>--}}
{{--</div>--}}

{{--</div>--}}
{{--</li>--}}
{{--<li  class="span1_of_1 left">--}}
{{--<h5>Check Out</h5>--}}
{{--<div class="book_date">--}}
{{--<form>--}}
{{--<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>--}}
{{--<input class="date" id="datepicker" type="text" value="19/10/2015" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '19/10/2015';}" required="">--}}
{{--</form>--}}
{{--</div>--}}
{{--</li>--}}
{{--<li class="span1_of_1 adult">--}}
{{--<h5>Adults (18+)</h5>--}}
{{--<!----------start section_room----------->--}}
{{--<div class="section_room">--}}
{{--<select id="country" onchange="change_country(this.value)" class="frm-field required">--}}
{{--<option value="null">1</option>--}}
{{--<option value="null">2</option>--}}
{{--<option value="AX">3</option>--}}
{{--<option value="AX">4</option>--}}
{{--<option value="AX">5</option>--}}
{{--<option value="AX">6</option>--}}
{{--</select>--}}
{{--</div>--}}
{{--</li>--}}
{{--<li class="span1_of_1 adult">--}}
{{--<h5>Children (0-17)</h5>--}}
{{--<!----------start section_room----------->--}}
{{--<div class="section_room">--}}
{{--<select id="country" onchange="change_country(this.value)" class="frm-field required">--}}
{{--<option value="null">1</option>--}}
{{--<option value="null">2</option>--}}
{{--<option value="AX">3</option>--}}
{{--<option value="AX">4</option>--}}
{{--<option value="AX">5</option>--}}
{{--<option value="AX">6</option>--}}
{{--</select>--}}
{{--</div>--}}
{{--</li>--}}
{{--<li class="span1_of_1 adult">--}}
{{--<h5>Class</h5>--}}
{{--<!----------start section_room----------->--}}
{{--<div class="section_room">--}}
{{--<select id="country" onchange="change_country(this.value)" class="frm-field required">--}}
{{--<option value="null">Economy</option>--}}
{{--<option value="null">Business</option>--}}
{{--</select>--}}
{{--</div>--}}
{{--</li>--}}
{{--<div class="clearfix"></div>--}}
{{--</ul>--}}
{{--<!---strat-date-piker---->--}}

{{--<!---/End-date-piker---->--}}
{{--</div>--}}
{{--<div class="reservation">--}}
{{--<ul>--}}
{{--<li class="span1_of_3">--}}
{{--<div class="date_btn">--}}
{{--<form>--}}
{{--<input type="submit" value="Submit" />--}}
{{--</form>--}}
{{--</div>--}}
{{--</li>--}}
{{--<div class="clearfix"></div>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="clearfix"></div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!---->--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">--}}
{{--<div class="facts">--}}
{{--<div class="flights">--}}
{{--<div class="reservation">--}}
{{--<ul>--}}
{{--<li  class="span1_of_1 desti1">--}}
{{--<div class="book_date">--}}
{{--<form>--}}
{{--<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>--}}
{{--<input type="text" placeholder="From" class="typeahead1 input-md form-control tt-input" required="">--}}
{{--</form>--}}
{{--</div>--}}
{{--</li>--}}
{{--<li  class="span1_of_1 desti1">--}}
{{--<div class="book_date">--}}
{{--<form>--}}
{{--<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>--}}
{{--<input type="text" placeholder="To" class="typeahead1 input-md form-control tt-input" required="">--}}
{{--</form>--}}
{{--</div>--}}
{{--</li>--}}
{{--<div class="clearfix"> </div>--}}
{{--</ul>--}}
{{--</div>--}}
{{--<div class="reservation">--}}
{{--<ul>--}}
{{--<li  class="span1_of_1">--}}
{{--<h5>Departure</h5>--}}
{{--<div class="book_date">--}}
{{--<form>--}}
{{--<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>--}}
{{--<input class="date" id="datepicker" type="text" value="19/10/2015" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '19/10/2015';}" required="">--}}
{{--</form>--}}
{{--</div>--}}
{{--</li>--}}
{{--<li  class="span1_of_1 left">--}}
{{--<h5>Return</h5>--}}
{{--<div class="book_date">--}}
{{--<form>--}}
{{--<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>--}}
{{--<input class="date" id="datepicker" type="text" value="19/10/2015" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '19/10/2015';}" required="">--}}
{{--</form>--}}
{{--</div>--}}
{{--</li>--}}
{{--<div class="clearfix"> </div>--}}
{{--</ul>--}}
{{--</div>--}}
{{--<div class="reservation">--}}
{{--<ul>--}}
{{--<li class="span1_of_1 adult">--}}
{{--<h5>Traveller</h5>--}}
{{--<!----------start section_room----------->--}}
{{--<div class="section_room">--}}
{{--<select id="1 Traveller" onchange="change_country(this.value)" class="frm-field required sect1">--}}
{{--<option value="null">1 Traveller</option>--}}
{{--<option value="null">2 Traveller</option>--}}
{{--<option value="AX">3 Traveller</option>--}}
{{--<option value="AX">4 Traveller</option>--}}
{{--<option value="AX">5 Traveller</option>--}}
{{--<option value="AX">6 Traveller</option>--}}
{{--</select>--}}
{{--</div>--}}
{{--</li>--}}
{{--<li class="span1_of_1 adult">--}}
{{--<h5>Children (0-17)</h5>--}}
{{--<!----------start section_room----------->--}}
{{--<div class="section_room">--}}
{{--<select id="country" onchange="change_country(this.value)" class="frm-field required">--}}
{{--<option value="null">1</option>--}}
{{--<option value="null">2</option>--}}
{{--<option value="AX">3</option>--}}
{{--<option value="AX">4</option>--}}
{{--<option value="AX">5</option>--}}
{{--<option value="AX">6</option>--}}
{{--</select>--}}
{{--</div>--}}
{{--</li>--}}
{{--<li class="span1_of_1 adult">--}}
{{--<h5>Class</h5>--}}
{{--<!----------start section_room----------->--}}
{{--<div class="section_room">--}}
{{--<select id="country" onchange="change_country(this.value)" class="frm-field required">--}}
{{--<option value="null">Economy</option>--}}
{{--<option value="null">Business</option>--}}
{{--</select>--}}
{{--</div>--}}
{{--</li>--}}
{{--<div class="clearfix"> </div>--}}
{{--</ul>--}}
{{--</div>--}}
{{--<div class="reservation">--}}
{{--<ul>--}}
{{--<li class="span1_of_3">--}}
{{--<div class="date_btn">--}}
{{--<form>--}}
{{--<input type="submit" value="Search Flights" />--}}
{{--</form>--}}
{{--</div>--}}
{{--</li>--}}
{{--<div class="clearfix"></div>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">--}}
{{--<div class="facts">--}}
{{--<div class="cars">--}}
{{--<div class="reservation">--}}
{{--<ul>--}}
{{--<li  class="span1_of_1 desti1">--}}
{{--<div class="book_date">--}}
{{--<form>--}}
{{--<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>--}}
{{--<input type="text" placeholder="Pick Up Location" class="typeahead1 input-md form-control tt-input" required="">--}}
{{--</form>--}}
{{--</div>--}}
{{--</li>--}}
{{--<li  class="span1_of_1 desti1">--}}
{{--<div class="book_date">--}}
{{--<form>--}}
{{--<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>--}}
{{--<input type="text" placeholder="Drop Off Location" class="typeahead1 input-md form-control tt-input" required="">--}}
{{--</form>--}}
{{--</div>--}}
{{--</li>--}}
{{--<div class="clearfix"> </div>--}}
{{--</ul>--}}
{{--</div>--}}
{{--<div class="reservation">--}}
{{--<ul>--}}
{{--<li  class="span1_of_1">--}}
{{--<h5>Pick Up Date</h5>--}}
{{--<div class="book_date">--}}
{{--<form>--}}
{{--<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>--}}
{{--<input class="date" id="datepicker" type="text" value="19/10/2015" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '19/10/2015';}" required="">--}}
{{--</form>--}}
{{--</div>--}}
{{--</li>--}}
{{--<li  class="span1_of_1 left">--}}
{{--<h5>Drop Off Date</h5>--}}
{{--<div class="book_date">--}}
{{--<form>--}}
{{--<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>--}}
{{--<input class="date" id="datepicker" type="text" value="19/10/2015" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '19/10/2015';}" required="">--}}
{{--</form>--}}
{{--</div>--}}
{{--</li>--}}
{{--<div class="clearfix"> </div>--}}
{{--</ul>--}}
{{--</div>--}}
{{--<div class="reservation">--}}
{{--<ul>--}}
{{--<li class="span1_of_3">--}}
{{--<div class="date_btn date_car">--}}
{{--<form>--}}
{{--<input type="submit" value="Search Cars" />--}}
{{--</form>--}}
{{--</div>--}}
{{--</li>--}}
{{--<div class="clearfix"></div>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">--}}
{{--<div class="facts">--}}
{{--<div class="destination">--}}
{{--<div class="reservation">--}}
{{--<ul>--}}
{{--<li  class="span1_of_1 desti">--}}
{{--<div class="book_date">--}}
{{--<form>--}}
{{--<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>--}}
{{--<input type="text" placeholder="City ,Region Or Country" class="typeahead1 input-md form-control tt-input" required="">--}}
{{--</form>--}}
{{--</div>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--<div class="reservation">--}}
{{--<ul>--}}
{{--<li class="span1_of_3">--}}
{{--<div class="date_btn date_car">--}}
{{--<form>--}}
{{--<input type="submit" value="Reach Destinations" />--}}
{{--</form>--}}
{{--</div>--}}
{{--</li>--}}
{{--<div class="clearfix"></div>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<script type="text/javascript">--}}
{{--$(document).ready(function () {--}}
{{--$('#horizontalTab').easyResponsiveTabs({--}}
{{--type: 'default', //Types: default, vertical, accordion--}}
{{--width: 'auto', //auto or any width like 600px--}}
{{--fit: true   // 100% fit in a container--}}
{{--});--}}
{{--});--}}
{{--</script>--}}