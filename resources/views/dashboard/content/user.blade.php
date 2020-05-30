@extends('dashboard.layouts')
@section('title','User Control Management')
@section('content')
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><i class="ti-home"></i> User Control Management</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card mb-3">
            <div class="card-body">
                <p class="card-text">
                    User control managements adalah control center tempat inti user yang dapat memanage semua yang ada
                    didalam situs aplikasi movith. Tidak akan bisa menambah ataupun update user dari luar. <b>Hanya
                        dapat diperbolehkan CRUD user inti dari managements control. </b>
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
                <div class="caption uppercase"><i class="ti-user"></i> Main User Controllers</div>
                <div class="tools">
                    <a data-toggle="modal" data-target="#adduser" class="btn btn-sm btn-primary"><i class="ti-plus"></i>
                        Add Users</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover init-datatable" id="">
                        <thead class="thead-light">
                            <tr>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Status</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!$user->isEmpty())
                            @foreach ($user as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->username}}</td>
                                <td align="center">@if($user->status=='active') <span style="color:green;"><i
                                            class="fas fa-circle"></i></span> Aktif @else <span style="color:red;"><i
                                            class="fas fa-circle"></i></span> Tidak Aktif @endif</td>
                                <td align="center"><a data-toggle="modal" data-target="#view{{$user->id}}"
                                        class="btn btn-outline-success"><i class="ti-eye"></i></a> <a
                                        data-toggle="modal" data-target="#update{{$user->id}}"
                                        class="btn btn-outline-primary"><i class="ti-pencil-alt"></i></a> <a
                                        href="/delete-data-user/{{$user->id}}" class="btn btn-outline-danger"><i
                                            class="ti-trash"></i></a></td>
                            </tr>
                            {{-- MODAL VIEW USER --}}
                            <div class="modal fade" id="view{{$user->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="view{{$user->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="view{{$user->id}}">Informasi Detail
                                                {{$user->name}}</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <h3>Informasi Umum</h3>
                                            <p>
                                                Nama: {{$user->name}} <br>
                                                Username: {{$user->username}} <br>
                                                Email: {{$user->email}} <br>
                                                Kontak Nomor: {{$user->phone}} <br>
                                                Domisili: {{$user->city}} <br>
                                            </p>
                                            <h4>Informasil Data Sistem</h4>
                                            <p>
                                                Dibuat tanggal: {{$user->created_at}} <br>
                                                Status user: {{$user->status}}
                                            </p>
                                        </div>
                                        <div class="modal-footer"><button type="button"
                                                class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Modal Update User --}}
                            <div class="modal fade" id="update{{$user->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="update{{$user->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="update{{$user->id}}">Update Data
                                                {{$user->name}}</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/update-data/{{$user->id}}" method="POST"
                                                id="formupdate{{$user->id}}">
                                                @csrf
                                                <div class="card-body">
                                                    <div class="form-group"><label>Full Name</label> <input
                                                            class="form-control" name="fullname"
                                                            value="{{$user->name}}">
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i
                                                                                class="ti-email"></i></span>
                                                                    </div>
                                                                    <input class="form-control" value="{{$user->email}}"
                                                                        name="email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>No HP</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i
                                                                                class="ti-tablet"></i></span>
                                                                    </div>
                                                                    <input class="form-control" name="phone"
                                                                        value="{{$user->phone}}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="ti-user"></i></span>
                                                            </div>
                                                            <input class="form-control" name="username"
                                                                value="{{$user->username}}" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select name="status" class="form-control custom-select">
                                                            <option value="active">Aktifkan!</option>
                                                            <option value="unactived">Non Aktifkan!</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" form="formupdate{{$user->id}}"
                                                        class="btn btn-outline-primary">Update
                                                        Perubahan</button>
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="4">Tidak ada data</td>
                                </tr>
                                @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Add user management --}}
<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="adduser" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adduser">Tambah data user management</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form action="/add-user" method="post">
                @csrf
                <div class="modal-body">

                    <div class="form-group"><label>Full Name</label> <input class="form-control" name="fullname"
                            placeholder="Your Fullname">
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-email"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="Your Email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Your Username" name="username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-tablet"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nomor Kontak" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Kota Domisili</label>
                        <select name="city" class="form-control custom-select">
                            <option value="Medan">Medan</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Bandung">Bandung</option>
                        </select>
                    </div>
                    <div class="modal-footer"><button type="button" class="btn btn-outline-secondary"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-primary">Simpan Data Baru</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
