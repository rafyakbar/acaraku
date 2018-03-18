@extends('layouts.global')

@section('content')
    <div style="margin: 2%">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h4>Judul</h4>
                <br>
                <input type="text" class="form-control fix-padding">
                <br>
                <h4>Tanggal</h4>
                <br>
                <input type="text" id="tgl" class="form-control fix-padding">
                <br>
                <h4>Kuota</h4>
                <br>
                <input type="number" class="form-control fix-padding" min="1" value="1">
                <br>
                <h4>Kategori</h4>
                <br>
                <select class="form-control fix-padding">
                    <option>Lain-lain</option>
                </select>
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
                <h4>Keterangan</h4>
                <br>
                <textarea class="use-tinymce"></textarea>
                <br>
                <button class="btn btn-success btn-lg">Buat Acara</button>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $().ready(function () {
            tinymce.init({
                selector: '.use-tinymce',
                entity_encoding: "raw",
                height: 500,
                theme: 'modern',
                toolbar1: 'styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            });

        });
        $('#tgl').bootstrapMaterialDatePicker({weekStart: 0, time: false});
    </script>
@endpush