@extends('layout.main')
@section('container')
    <br>
    <div class="container">
        <div class="row">
            @if (session()->has('Successfully'))
                    <div class="alert alert-success col-lg-12" role="alert">
                        {{ session('Successfully') }}
                    </div>
                @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-ad-12">
                <h1 align="center" class=" text-light">Data Bongkaran Truck</h1>
                <div class="">
                    <div class="card-body">
                        <a type="button" class="btn btn-light float-end" href="create">Tambah Data Baru</a>
                        <br><br>
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr align="center" class="table-active">
                                    <th scope="col">Id</th>
                                    <th scope="col" class="text-start">Kode Bongkar</th>
                                    <th scope="col" class="text-start">Nama Sopir</th>
                                    <th scope="col" class="text-start">Tanggal Bongkar</th>
                                    <th scope="col" class="text-start">Alamat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_bongkaran as $bongkaran)
                                    <tr align="center">
                                        <td class="align-middle"><?= $bongkaran->id ?></td>
                                        <td class="text-start align-middle"><?= $bongkaran->kode_bongkaran ?></td>
                                        <td class="text-start align-middle"><?= $bongkaran->nama_sopir ?></td>
                                        <td class="text-start align-middle"><?= $bongkaran->tanggalbongkar ?></td>
                                        <td class="text-start align-middle"><?= $bongkaran->alamat ?></td>
                                        <td class="text-start">
                                            <a type="button" class="btn btn-outline-success"
                                                href="detail/{{ $bongkaran->id }}">Detail
                                                Data</a>
                                            <a type="button" class="btn btn-outline-warning" href="edit/{{ $bongkaran->id }}">Edit
                                                Data</a>
                                            <form action="/bongkaran/delete/{{ $bongkaran->id }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-outline-danger"
                                                    onclick="return  confirm('Apakah Anda Yakin Menghapus ?') ">Hapus</button>
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
