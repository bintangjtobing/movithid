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
                                <td align="center"><a data-toggle="modal" data-target="#viewclients{{$client->id}}"
                                        class="btn btn-outline-success"><i class="ti-eye"></i></a> <a
                                        data-toggle="modal" data-target="#updateclients{{$client->id}}"
                                        class="btn btn-outline-primary"><i class="ti-pencil-alt"></i></a> <a
                                        href="/delete-client/{{$client->id}}" class="btn btn-outline-danger"><i
                                            class="ti-trash"></i></a></td>
                            </tr>
                            {{-- MODAL VIEW USER --}}
                            <div class="modal fade" id="viewclients{{$client->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="viewclients{{$client->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewclients{{$client->id}}">Informasi Detail
                                                {{$client->name}}</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Informasi Penanggung Jawab</h4>
                                            <p>
                                                Nama: {{$client->clients_name}} <br>
                                                Username: {{$client->username}} <br>
                                                Email: {{$client->email}} <br>
                                                Kontak Nomor: {{$client->phone}} <br>
                                                Password: {{$client->unpassword}} <br>
                                            </p>
                                            <h4>Informasi Data Usaha Client</h4>
                                            <p>
                                                Nama Usaha: {{$client->namausaha}} <br>
                                                Deskripsi: {{$client->deskripsi}} <br>
                                            </p>
                                            <h4>Informasil Data Sistem</h4>
                                            <p>
                                                Dibuat tanggal: {{$client->created_at}} <br>
                                                Dibuat oleh user: {{$client->created_by}}
                                            </p>
                                        </div>
                                        <div class="modal-footer"><button type="button"
                                                class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Modal Update Client --}}
                            <div class="modal fade" id="updateclients{{$client->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="update{{$client->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="update{{$client->id}}">Update Data
                                                {{$client->clients_name}}</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/update-clients/{{$client->id}}" method="POST"
                                                id="formupdate{{$client->id}}">
                                                @csrf
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="">Nama Usaha (PT/CV/UD/Lainnya)</label>
                                                        <input type="text" name="namausaha" class="form-control"
                                                            value="{{$client->namausaha}}" required>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6">
                                                            <div class="form-group"><label>Full Name</label> <input
                                                                    class="form-control" name="fullname"
                                                                    value="{{$client->clients_name}}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Email</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i
                                                                                class="ti-email"></i></span>
                                                                    </div>
                                                                    <input type="email" class="form-control"
                                                                        value="{{$client->email}}" name="email"
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
                                                                        <span class="input-group-text"><i
                                                                                class="ti-user"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control"
                                                                        value="{{$client->username}}" name="username"
                                                                        required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i
                                                                                class="ti-tablet"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control"
                                                                        value="{{$client->phone}}" name="phone"
                                                                        required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <h4>Informasi Usaha</h4>
                                                    <div class="form-group">
                                                        <label for="">Ceritakan usaha yang dimiliki:</label>
                                                        <textarea name="deskripsi" id="" cols="30" rows="10"
                                                            class="form-control"
                                                            required>{!!$client->deskripsi!!}</textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" form="formupdate{{$client->id}}"
                                                        class="btn btn-outline-primary">Update
                                                        Perubahan</button>
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                <td align="center"><a data-toggle="modal" data-target="#viewplaces{{$places->id}}"
                                        class="btn btn-outline-success"><i class="ti-eye"></i></a> <a
                                        data-toggle="modal" data-target="#updateplaces{{$places->id}}"
                                        class="btn btn-outline-primary"><i class="ti-pencil-alt"></i></a> <a
                                        href="/delete-places/{{$places->id}}" class="btn btn-outline-danger"><i
                                            class="ti-trash"></i></a></td>
                            </tr>
                            {{-- MODAL VIEW USER --}}
                            <div class="modal fade" id="viewplaces{{$places->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="viewplaces{{$places->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewplaces{{$places->id}}">Informasi Detail
                                                {{$places->nama_toko}}</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Informasi Penanggung Jawab</h4>
                                            <p>
                                                Nama: {{$places->nama}} <br>
                                                Email: {{$places->email}} <br>
                                                Kontak Nomor: {{$places->nohp}} <br>
                                            </p>
                                            <h4>Informasi Data Toko/Tempat</h4>
                                            <p>
                                                Nama Toko/Tempat: {{$places->nama_toko}} <br>
                                                Alamat Toko: {{$places->alamat_toko}} <br>
                                                Spesifikasi TV: {{$places->spesifikasitv}} <br>
                                                Apakah toko tersebut memiliki spesifikasi smart tv? <br>
                                                {{$places->smarttv}}
                                            </p>
                                            <h4>Informasil Data Sistem</h4>
                                            <p>
                                                Dibuat tanggal: {{$places->created_at}} <br>
                                                Dibuat oleh user: {{$places->created_by}} <br>
                                                Terakhir ubah data: {{$places->updated_at}} <br>
                                            </p>
                                        </div>
                                        <div class="modal-footer"><button type="button"
                                                class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Modal Update Places --}}
                            <div class="modal fade" id="updateplaces{{$places->id}}" tabindex="-1" role="dialog"
                                aria-labelledby="updateplaces{{$places->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="update{{$places->id}}">Update Data Toko
                                                {{$places->nama_toko}}</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/update-places/{{$places->id}}" method="POST"
                                                id="formupdateplaces{{$places->id}}">
                                                @csrf
                                                <div class="card-body">
                                                    <h4>Informasi Penanggung Jawab</h4>
                                                    <div class="form-group">
                                                        <label for="">Nama penanggung jawab</label>
                                                        <input type="text" name="name" class="form-control"
                                                            value="{{$places->nama}}" required>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6">
                                                            <div class="form-group"><label>Email</label> <input
                                                                    type="email" class="form-control" name="email"
                                                                    value="{{$places->email}}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Nomor Telepon</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i
                                                                                class="ti-tablet"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control"
                                                                        value="{{$places->nohp}}" name="nohp" required>
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
                                                                <input type="text" name="nama_toko"
                                                                    value="{{$places->nama_toko}}" id=""
                                                                    class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Alamat Toko</label>
                                                                <input type="text" name="alamat_toko"
                                                                    value="{{$places->alamat_toko}}"
                                                                    class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Tipe TV</label>
                                                                <select name="smarttv" id=""
                                                                    class="form-control custom-select" required>
                                                                    <option value="Smart TV">Smart TV</option>
                                                                    <option value="Bukan Smart TV">Bukan Smart TV
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="">Spesifikasi TV</label>
                                                                <textarea name="spesifikasi" id="" cols="30" rows="6"
                                                                    class="form-control"
                                                                    required>{!!$places->spesifikasitv!!}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-6">
                                                            <h3>Tambah Video</h3>


                                                            <?php


                                                                $selectedIds = DB::table('places_video')
                                                                    ->select('id_ads')
                                                                    ->where('id_place', $places->id)
                                                                    ->get();

                                                                $tempSelectedIds = [];
                                                                foreach($selectedIds as $selectedId) $tempSelectedIds[] = $selectedId->id_ads;



                                                            ?>
                                                            <input type="hidden" name="selectedIds" value="<?php echo implode(',', $tempSelectedIds) ?>">
                                                            <select class="form-control js-id_ads" name="id_ads[]" multiple>
                                                                <option value="">Pilih</option>


                                                                @foreach ($ads as $ad)
                                                                <option value="{{$ad->id}}" <?php if(in_array($ad->id, $tempSelectedIds)) echo 'selected'; ?>>{{$ad->judul_ads}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" form="formupdateplaces{{$places->id}}"
                                                        class="btn btn-outline-primary">Update
                                                        Perubahan</button>
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                <input type="hidden" name="truth_action" value="save">
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
                    <div class="form-row">
                        <div class="col-md-6">
                            <h3>Tambah Video</h3>
                            <select class="form-control js-id_ads" name="id_ads[]" multiple>
                                <option value="">Pilih</option>
                                @foreach ($ads as $ads)
                                <option value="{{$ads->id}}">{{$ads->judul_ads}}</option>
                                @endforeach
                            </select>
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
