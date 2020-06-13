@extends('dashboard.layouts')
@section('title','Box Office Film Management')
@section('content')
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><i class="ti-home"></i> Box Office Film Management</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-body">
                <p class="card-text">
                    Box Office Databases adalah tempat manajemen dan kontroller untuk bagian film film box-offices, baik
                    itu bioskop, film dalam negeri maupun film luar negeri. </b>
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
        <a data-toggle="modal" data-target="#addboxoffice" class="btn btn-primary btn-block"><i class="ti-plus"></i> Add
            Box Office</a>
    </div>
</div>
<div class="row">
    @if($box->isEmpty())
    <div class="col-md-12 text-center">
        No data in database right now. Please check again.
    </div>
    @else
    @foreach ($box as $box)
    <div class="col-md-3">
        <div class="card mb-3">
            <div class="card-body">
                <h4 class="card-title"><img src="media/boxoffice/coverimg/{{$box->judul}}/{{$box->coverimg}}" alt="">
                </h4>
                <h4 class="card-title"><i class="fas fa-film"></i> {{$box->judul}}</h4>
                <h6 class="card-subtitle mb-2">
                    <div class="row">
                        <div class="col-md-8 text-left">
                            {{$box->kategori_utama}}, {{$box->sub_kategori}}, {{$box->sub_kategori2}}
                        </div>
                        <div class="col-md-4 text-right">
                            {{$box->tahun_film}}
                        </div>
                    </div>
                </h6>
                <p class="card-text">
                    <a data-toggle="modal" data-target="#viewfilm{{$box->id}}" class="btn btn-outline-success"><i
                            class="ti-eye"></i></a> <a data-toggle="modal" data-target="#updatefilm{{$box->id}}"
                        class="btn btn-outline-primary"><i class="ti-pencil-alt"></i></a> <a
                        href="/delete-film/{{$box->id}}" class="btn btn-outline-danger"><i class="ti-trash"></i></a>
                </p>
            </div>
        </div>
    </div>
    {{-- MODAL VIEW FILM --}}
    <div class="modal fade" id="viewfilm{{$box->id}}" tabindex="-1" role="dialog" aria-labelledby="viewfilm{{$box->id}}"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewfilm{{$box->id}}">Informasi Detail
                        {{$box->judul}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <h3>Informasi Umum</h3>
                            <p>
                                Judul: {{$box->judul}}<br>
                                Tahun terbit film: {{$box->tahun_film}} <br>
                                Kategori film: {{$box->kategori_utama}}, {{$box->sub_kategori}}, {{$box->sub_kategori2}}
                                <br>
                            </p>
                            <h4>Informasil Data Sistem</h4>
                            <p>
                                Dibuat tanggal: {{$box->created_at}} <br>
                                Diupload oleh: {{$box->created_by}}
                            </p>
                        </div>
                        <div class="col-md-5 text-right">
                            <img class="viewadsimg" src="media/boxoffice/coverimg/{{$box->judul}}/{{$box->coverimg}}"
                                alt="{{$box->judul}}">
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

{{-- Add box office databases --}}
<div class="modal fade" id="addboxoffice" tabindex="-1" role="dialog" aria-labelledby="addboxoffice" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addboxoffice">Tambah Film Box-Office</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form action="/add-box-office" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Judul film</label>
                        <input type="text" name="judul" class="form-control" placeholder="Judul film" required>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Kategori utama</label>
                                <select name="kategori_utama" id="" class="form-control custom-select" required>
                                    <option value="action">Action</option>
                                    <option value="adventure">Adventure</option>
                                    <option value="animation">Animation</option>
                                    <option value="biography">Biography</option>
                                    <option value="comedy">Comedy</option>
                                    <option value="crime">Crime</option>
                                    <option value="documentary">Documentary</option>
                                    <option value="drama">Drama</option>
                                    <option value="family">Family</option>
                                    <option value="fantasy">Fantasy</option>
                                    <option value="film-noir">Film-Noir</option>
                                    <option value="game-show">Game-Show</option>
                                    <option value="history">History</option>
                                    <option value="horror">Horror</option>
                                    <option value="music">Music</option>
                                    <option value="musical">Musical</option>
                                    <option value="mystery">Mystery</option>
                                    <option value="news">News</option>
                                    <option value="reality-tv">Reality-TV</option>
                                    <option value="romance">Romance</option>
                                    <option value="sci-fi">Sci-Fi</option>
                                    <option value="sport">Sport</option>
                                    <option value="talk-show">Talk-Show</option>
                                    <option value="thriller">Thriller</option>
                                    <option value="war">War</option>
                                    <option value="western">Western</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Sub Kategori</label>
                                <select name="sub_kategori" id="" class="form-control custom-select" required>
                                    <option value="action">Action</option>
                                    <option value="adventure">Adventure</option>
                                    <option value="animation">Animation</option>
                                    <option value="biography">Biography</option>
                                    <option value="comedy">Comedy</option>
                                    <option value="crime">Crime</option>
                                    <option value="documentary">Documentary</option>
                                    <option value="drama">Drama</option>
                                    <option value="family">Family</option>
                                    <option value="fantasy">Fantasy</option>
                                    <option value="film-noir">Film-Noir</option>
                                    <option value="game-show">Game-Show</option>
                                    <option value="history">History</option>
                                    <option value="horror">Horror</option>
                                    <option value="music">Music</option>
                                    <option value="musical">Musical</option>
                                    <option value="mystery">Mystery</option>
                                    <option value="news">News</option>
                                    <option value="reality-tv">Reality-TV</option>
                                    <option value="romance">Romance</option>
                                    <option value="sci-fi">Sci-Fi</option>
                                    <option value="sport">Sport</option>
                                    <option value="talk-show">Talk-Show</option>
                                    <option value="thriller">Thriller</option>
                                    <option value="war">War</option>
                                    <option value="western">Western</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Sub Kategori 2</label>
                                <select name="sub_kategori2" id="" class="form-control custom-select" required>
                                    <option value="action">Action</option>
                                    <option value="adventure">Adventure</option>
                                    <option value="animation">Animation</option>
                                    <option value="biography">Biography</option>
                                    <option value="comedy">Comedy</option>
                                    <option value="crime">Crime</option>
                                    <option value="documentary">Documentary</option>
                                    <option value="drama">Drama</option>
                                    <option value="family">Family</option>
                                    <option value="fantasy">Fantasy</option>
                                    <option value="film-noir">Film-Noir</option>
                                    <option value="game-show">Game-Show</option>
                                    <option value="history">History</option>
                                    <option value="horror">Horror</option>
                                    <option value="music">Music</option>
                                    <option value="musical">Musical</option>
                                    <option value="mystery">Mystery</option>
                                    <option value="news">News</option>
                                    <option value="reality-tv">Reality-TV</option>
                                    <option value="romance">Romance</option>
                                    <option value="sci-fi">Sci-Fi</option>
                                    <option value="sport">Sport</option>
                                    <option value="talk-show">Talk-Show</option>
                                    <option value="thriller">Thriller</option>
                                    <option value="war">War</option>
                                    <option value="western">Western</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-2">
                            <?php
                            $years = array_combine(range(date("Y"), 1910), range(date("Y"), 1910));
                            ?>
                            <div class="form-group"><label>Tahun Film</label>
                                <select name="tahun_film" id="" class="form-control custom-select">
                                    @foreach ($years as $long)
                                    <option value="{{$long}}">{{$long}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="">Cover Box Office</label>
                                <input type="file" name="coverimg" id="" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="">Upload Film/Box Office</label>
                                <input type="file" name="file" id="" class="form-control" required>
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
