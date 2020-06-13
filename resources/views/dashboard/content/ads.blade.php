@extends('dashboard.layouts')
@section('title','Ads Video Management')
@section('content')
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><i class="ti-home"></i> Ads Video Management</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-body">
                <p class="card-text">
                    Ads Video Managements adalah tempat management dan kontroller video video iklan yang sudah
                    tertampung disistem. Baik itu berasal dari client ataupun dari management sendiri.</b>
                </p>
                <p class="card-text">To request a feature, contact me <a href="mailto:hello@bintangtobing.com"
                        target="_blank">hello@bintangtobing.com</a></p>
            </div>
        </div>
    </div>
</div>
@if(session('selesai'))
<div class="row">
    <div class="col">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Successfull!!</strong> {{session('selesai')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
@endif
<div class="row">
    <div class="col-md-12 mb-3">
        <a data-toggle="modal" data-target="#addvideoads" class="btn btn-primary btn-block"><i class="ti-plus"></i> Add
            Video</a>
    </div>
</div>
<div class="row">
    @if($ads->isEmpty())
    <div class="col-md-12 text-center">
        No data in this database.
    </div>
    @else
    @foreach ($ads as $ads)
    <div class="col-md-3">
        <div class="card mb-3">
            <div class="card-body">
                <h4 class="card-title"><img src="media/coverimg/{{$ads->requester}}/{{$ads->coverimg}}" alt=""></h4>
                <h4 class="card-title">{{$ads->judul_ads}}</h4>
                <h6 class="card-subtitle mb-2">{{$ads->requester}} | {{$ads->kategori}}</h6>
                <p class="card-text">
                    {{$ads->desc_ads}}
                </p>
                <p class="card-text">
                    <a data-toggle="modal" data-target="#viewads{{$ads->id}}" class="btn btn-outline-success"><i
                            class="ti-eye"></i></a> <a data-toggle="modal" data-target="#updateads{{$ads->id}}"
                        class="btn btn-outline-primary"><i class="ti-pencil-alt"></i></a> <a
                        href="/delete-ads/{{$ads->id}}" class="btn btn-outline-danger"><i class="ti-trash"></i></a>
                </p>
            </div>
        </div>
    </div>
    {{-- MODAL VIEW Ads --}}
    <div class="modal fade" id="viewads{{$ads->id}}" tabindex="-1" role="dialog" aria-labelledby="viewads{{$ads->id}}"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewads{{$ads->id}}">Informasi Detail
                        {{$ads->judul_ads}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <h3>Informasi Umum</h3>
                            <p>
                                Peminta Iklan: {{$ads->requester}} <br>
                                <br>
                                Judul Iklan: {{$ads->judul_ads}} <br>
                                Deskripsi iklan: {!!$ads->desc_ads!!} <br><br>
                                Kategori: {{$ads->kategori}} <br>
                                Mulai iklan: {{$ads->starteddate}} <br>
                                Selesai iklan: {{$ads->datefinished}} <br>
                                Lama Kontrak: {{$ads->lama_kontrak}} <br>
                            </p>
                            <h4>Informasil Data Sistem</h4>
                            <p>
                                Dibuat tanggal: {{$ads->created_at}} <br>
                            </p>
                        </div>
                        <div class="col-md-5 text-right">
                            <img class="viewadsimg" src="media/coverimg/{{$ads->requester}}/{{$ads->coverimg}}"
                                alt="{{$ads->judul_ads}}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button type="button" class="btn btn-outline-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- MODAL Update Ads --}}
    <div class="modal fade" id="updateads{{$ads->id}}" tabindex="-1" role="dialog"
        aria-labelledby="updateads{{$ads->id}}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateads{{$ads->id}}">Update iklan
                        {{$ads->judul_ads}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <h3>Informasi Umum</h3>
                            <p>
                                Peminta Iklan: {{$ads->requester}} <br>
                                <br>
                                Judul Iklan: {{$ads->judul_ads}} <br>
                                Deskripsi iklan: {!!$ads->desc_ads!!} <br><br>
                                Kategori: {{$ads->kategori}} <br>
                                Mulai iklan: {{$ads->starteddate}} <br>
                                Selesai iklan: {{$ads->datefinished}} <br>
                                Lama Kontrak: {{$ads->lama_kontrak}} <br>
                            </p>
                            <h4>Informasil Data Sistem</h4>
                            <p>
                                Dibuat tanggal: {{$ads->created_at}} <br>
                            </p>
                        </div>
                        <div class="col-md-5 text-right">
                            <img class="viewadsimg" src="media/coverimg/{{$ads->requester}}/{{$ads->coverimg}}"
                                alt="{{$ads->judul_ads}}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button type="button" class="btn btn-outline-secondary"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif
</div>


{{-- Add ads video databases --}}
<div class="modal fade" id="addvideoads" tabindex="-1" role="dialog" aria-labelledby="addvideoads" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addvideoads">Tambah Iklan Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form action="/add-ads-video" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Peng-iklan</label>
                        <input type="text" name="requester" class="form-control" placeholder="Nama Peng-iklan" required>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group"><label>Judul Iklan</label> <input class="form-control"
                                    name="judul_ads" placeholder="Judul Iklan" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Deskripsi Iklan</label>
                                <textarea name="desc_ads" id="" cols="30" rows="5" class="form-control"
                                    placeholder="Deskripsi iklan"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Kategori iklan</label>
                                <select name="kategori" class="form-control custom-select" required>
                                    <option value="Iklan Politik">Iklan Politik</option>
                                    <option value="Iklan Pendidikan">Iklan Pendidikan</option>
                                    <option value="Iklan Pendidikan">Iklan Pendidikan</option>
                                    <option value="Iklan Kesehatan">Iklan Kesehatan</option>
                                    <option value="Iklan Kecantikan & Perawatan Tubuh">Iklan Kecantikan & Perawatan
                                        Tubuh</option>
                                    <option value="Iklan Parawisata">Iklan Parawisata</option>
                                    <option value="Iklan Hiburan">Iklan Hiburan</option>
                                    <option value="Iklan Olahraga">Iklan Olahraga</option>
                                    <option value="Iklan Hukum">Iklan Hukum</option>
                                    <option value="Iklan Lowongan Kerja">Iklan Lowongan Kerja</option>
                                    <option value="Iklan Perkawinan">Iklan Perkawinan</option>
                                    <option value="Iklan Makanan & Minuman">Iklan Makanan & Minuman</option>
                                    <option value="Iklan Otomotif">Iklan Otomotif</option>
                                    <option value="Iklan Media">Iklan Media</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Lama Kontrak</label>
                                <select name="lama_kontrak" class="form-control custom-select" required>
                                    <option value="1 Bulan">1 Bulan</option>
                                    <option value="3 Bulan">3 Bulan</option>
                                    <option value="6 Bulan">6 Bulan</option>
                                    <option value="1 Tahun">1 Tahun</option>
                                    <option value="3 Tahun">3 Tahun</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Iklan mulai tayang</label>
                                <input type="text" name="starteddate" value="10/24/2019" id="starteddate"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Tanggal Berakhir Iklan</label>
                                <input type="text" name="datefinished" id="datefinished" class="form-control">
                            </div>
                        </div>
                    </div>
                    <h4>Informasi File Iklan</h4>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Gambar sampul iklan</label>
                                <input type="file" name="coverimg" id="coverimg" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Upload file iklan</label>
                                <input type="file" name="fileads" id="fileads" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary">Simpan iklan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
