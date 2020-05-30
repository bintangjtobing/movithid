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
        <a href="#" class="btn btn-primary btn-block"><i class="ti-plus"></i> Add Video</a>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="card mb-3">
            <div class="card-body">
                <h4 class="card-title"><img
                        src="https://4.bp.blogspot.com/-2csNtMPzk5I/WODkAVO7HGI/AAAAAAAABHU/Yq3Y0BuqhvYvVAn4QZ04uYiDrWgKJ901wCLcB/s1600/Chickeet.jpg"
                        alt=""></h4>
                <h4 class="card-title">Chickert</h4>
                <h6 class="card-subtitle mb-2">Keripik Ceker Ayam</h6>
                <p class="card-text">
                    Sensasi Ngemil Sehat Paling Nikmat
                </p>
                <p class="card-text">
                    <a href="#" class="btn btn-primary btn-sm">Edit</a> <a href="#"
                        class="btn btn-danger btn-sm">Delete</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
