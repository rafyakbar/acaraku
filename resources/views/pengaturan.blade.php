@extends('layouts.global')

@section('content')
    <div style="margin: 5%">
        <div class="row">
            <div class="col-md-4">
                <h3><b>Personal</b></h3>
                <br>
                <h4>Nama</h4>
                <br>
                <input type="text" class="form-control fix-padding">
                <br>
                <h4>Email</h4>
                <br>
                <input type="email" class="form-control fix-padding">
                <br>
                <h4>No HP</h4>
                <br>
                <input type="number" class="form-control fix-padding">
                <br>
                <h4>Provinsi</h4>
                <br>
                <select class="form-control fix-padding">
                    <option>Jawa Timur</option>
                </select>
                <br>
                <h4>Kabupaten</h4>
                <br>
                <select class="form-control fix-padding">
                    <option>Surabaya</option>
                </select>
                <br>
                <h4>Alamat</h4>
                <br>
                <textarea class="form-control fix-padding" rows="4"></textarea>
                <br>
                <button class="btn btn-success btn-lg">Simpan</button>
            </div>
            <div class="col-md-4">
                <h3><b>Keamanan</b></h3>
                <br>
                <h4>Password Lama</h4>
                <br>
                <input type="password" class="form-control fix-padding">
                <br>
                <h4>Password Baru</h4>
                <br>
                <input type="password" class="form-control fix-padding">
                <br>
                <h4>Tulis Ulang Password Baru</h4>
                <br>
                <input type="password" class="form-control fix-padding">
                <br>
                <button class="btn btn-success btn-lg">Simpan</button>
            </div>
            <div class="col-md-4">
                <h3><b>Hak Akses</b></h3>
                <br>
                <h4>Scan portofolio</h4>
                <br>
                <input type="file" class="form-control fix-padding">
                <br>
                <button class="btn btn-success btn-lg">Ubah Hak Akses Menjadi EO</button>
                <br>
                <p>Dengan menjadi EO anda bisa membuat event-event pada acaraku.com</p>
            </div>
        </div>
    </div>
@endsection