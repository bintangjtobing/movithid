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
        <a href="#" class="btn btn-primary btn-block"><i class="ti-plus"></i> Add Video</a>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="card mb-3">
            <div class="card-body">
                <h4 class="card-title"><img
                        src="https://1.bp.blogspot.com/-ZFgJr94OTCg/XiCRMmBA9bI/AAAAAAAADDk/vkXxVJ0Rj48vBZ3g9DX0q4ieImjrLEadwCLcBGAsYHQ/s1600/1-poster.jpg"
                        alt=""></h4>
                <h4 class="card-title"><i class="fas fa-film"></i> IP Man 4: The ...</h4>
                <h6 class="card-subtitle mb-2">
                    <div class="row">
                        <div class="col-md-8 text-left">
                            Comedi, Drama, Fantasy
                        </div>
                        <div class="col-md-4 text-right">
                            2020
                        </div>
                    </div>
                </h6>
                <p class="card-text">
                    <a href="#" class="btn btn-primary btn-sm">Edit</a> <a href="#"
                        class="btn btn-danger btn-sm">Delete</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
