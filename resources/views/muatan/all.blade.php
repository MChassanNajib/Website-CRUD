@extends('layout.main')
@section('container')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h1 align="center" class=" text-light">Data Muatan Truck</h1>
                @if (session()->has('Successfully'))
                    <div class="alert alert-success col-lg-12" role="alert">
                        {{ session('Successfully') }}
                    </div>
                @endif
                <div class="">
                    <div class="card-body">
                        <a type="button" class="btn btn-light float-end" href="create">Tambah Data Baru</a>
                        <br><br>
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr align="center" class="table-active">

                                    <th scope="col">Id</th>
                                    <th scope="col" class="text-start">Kode Muat</th>
                                    <th scope="col" class="text-start">Nama Sopir</th>
                                    <th scope="col" class="text-start">Barang</th>
                                    <th scope="col" class="text-start">Telepon</th>
                                    <th scope="col" class="text-start">Alamat</th>
                                    <th scope="col">Aksi</th>
                                    <!-- <th scope="col">Tanggal Lahir</th>
                                                                    <th scope="col">Foto</th>
                                                                    <th scope="col">Aksi</th> -->

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_muatan as $muatan)
                                    <tr align="center">
                                        <td><?= $muatan->id ?></td>
                                        <td class="text-start"><?= $muatan->kode_muatan ?></td>
                                        <td class="text-start"><?= $muatan->nama_sopir ?></td>
                                        <td class="text-start"><?= $muatan->barang ?></td>
                                        <td class="text-start"><?= $muatan->telepon ?></td>
                                        <td class="text-start"><?= $muatan->alamat ?></td>
                                        <td>
                                            <a type="button" class="btn btn-outline-success"
                                                href="detail/{{ $muatan->id }}">Detail
                                                Page</a>
                                            <a type="button" class="btn btn-outline-warning" href="edit/{{ $muatan->id }}">Edit
                                                Page</a>
                                            <form action="/muatan/delete/{{ $muatan->id }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-outline-danger
                                                    onclick="return  confirm('Apakah Anda Yakin') ">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
