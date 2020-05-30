@extends('dashboard.layouts')
@section('title','Client Control Management')
@section('content')
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><i class="ti-home"></i> Client Control Management</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-body">
                <p class="card-text">
                    Client Managements adalah control center tempat clients perusahaan yang mau mengingklankan produk
                    atau jasa mereka ke Movith. Hanya disediakan tempat data clients dan data video clients tersebut.
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
    <div class="col-lg-12">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption uppercase"><i class="ti-user"></i> Clients Controllers</div>
                <div class="tools">
                    <a data-toggle="modal" data-target="#adduser" class="btn btn-sm btn-primary"><i class="ti-plus"></i>
                        Add Clients</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover init-datatable" id="">
                        <thead class="thead-light">
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Kontak Nomor</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!$client->isEmpty())
                            @foreach ($client as $client)
                            <tr>
                                <td>{{$client->client_name}}</td>
                                <td>{{$client->email}}</td>
                                <td>{{$client->phoen}}</td>

                                <td align="center"><a data-toggle="modal" data-target="#view{{$client->id}}"
                                        class="btn btn-outline-success"><i class="ti-eye"></i></a> <a
                                        data-toggle="modal" data-target="#update{{$client->id}}"
                                        class="btn btn-outline-primary"><i class="ti-pencil-alt"></i></a> <a
                                        href="/delete-data-user/{{$client->id}}" class="btn btn-outline-danger"><i
                                            class="ti-trash"></i></a></td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="3" align="center">Tidak ada data</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
