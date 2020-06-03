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
                    Client/Places Managements adalah control center tempat clients perusahaan yang mau mengingklankan
                    produk
                    atau jasa mereka ke Movith. Hanya disediakan tempat data clients dan data video clients tersebut.
                    Dan juga tempat management toko toko yang sudah bergabung dengan Movith.id
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
{{-- CLIENTS CONTROLLER --}}
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption uppercase"><i class="ti-user"></i> Clients Controllers</div>
                <div class="tools">
                    <a data-toggle="modal" data-target="#addclient" class="btn btn-sm btn-primary"><i
                            class="ti-plus"></i>
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
                                <td>{{$client->clients_name}}</td>
                                <td>{{$client->email}}</td>
                                <td>{{$client->phone}}</td>

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
                                <td colspan="4" align="center">Tidak ada data</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- END CLIENTS --}}
{{-- PLACE CONTROLLER --}}
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption uppercase"><i class="ti-user"></i> Places Controllers</div>
                <div class="tools">
                    <a data-toggle="modal" data-target="#addplaces" class="btn btn-sm btn-primary"><i
                            class="ti-plus"></i>
                        Add Places</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover init-datatable" id="">
                        <thead class="thead-light">
                            <tr>
                                <th>Nama Toko</th>
                                <th>Domisili Toko</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!$places->isEmpty())
                            @foreach ($places as $places)
                            <tr>
                                <td>{{$places->nama_toko}}</td>
                                <td>{{$places->alamat_toko}}</td>
                                <td align="center"><a data-toggle="modal" data-target="#view{{$places->id}}"
                                        class="btn btn-outline-success"><i class="ti-eye"></i></a> <a
                                        data-toggle="modal" data-target="#update{{$places->id}}"
                                        class="btn btn-outline-primary"><i class="ti-pencil-alt"></i></a> <a
                                        href="/delete-data-user/{{$places->id}}" class="btn btn-outline-danger"><i
                                            class="ti-trash"></i></a></td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="4" align="center">Tidak ada data</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- END PLACES CONTROLLER --}}
{{-- Add client --}}
<div class="modal fade" id="addclient" tabindex="-1" role="dialog" aria-labelledby="addclient" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addclient">Tambah data client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form action="/add-client" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama Usaha (PT/CV/UD/Lainnya)</label>
                        <input type="text" name="namausaha" class="form-control" placeholder="Nama Usaha" required>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group"><label>Full Name</label> <input class="form-control" name="fullname"
                                    placeholder="Your Fullname" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-email"></i></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Your Email" name="email"
                                        required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Your Username" name="username"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-tablet"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Nomor Kontak" name="phone"
                                        required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4>Informasi Usaha</h4>
                    <div class="form-group">
                        <label for="">Ceritakan usaha yang dimiliki:</label>
                        <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control" required></textarea>
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

{{-- Add places modal --}}
<div class="modal fade" id="addplaces" tabindex="-1" role="dialog" aria-labelledby="addplaces" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addplaces">Tambah data toko/cafe/lain lain</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form action="/add-places" method="post">
                @csrf
                <div class="modal-body">
                    <h4>Informasi Penanggung Jawab</h4>
                    <div class="form-group">
                        <label for="">Nama penanggung jawab</label>
                        <input type="text" name="name" class="form-control" placeholder="Nama Penanggung Jawab"
                            required>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group"><label>Email</label> <input type="email" class="form-control"
                                    name="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nomor Telepon</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ti-tablet"></i></span>
                                    </div>
                                    <input type="text" class="form-control"
                                        placeholder="Nomor Telepon yang Bisa Dihubungi" name="nohp" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h4>Informasi Toko</h4>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Toko</label>
                                <input type="text" name="nama_toko" placeholder="" id="" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Alamat Toko</label>
                                <input type="text" name="alamat_toko" id="" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tipe TV</label>
                                <select name="smarttv" id="" class="form-control custom-select" required>
                                    <option value="Smart TV">Smart TV</option>
                                    <option value="Bukan Smart TV">Bukan Smart TV</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Spesifikasi TV</label>
                                <textarea name="spesifikasi" id="" cols="30" rows="6" class="form-control"
                                    required></textarea>
                            </div>
                        </div>
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
{{-- End add places modal --}}
@endsection
