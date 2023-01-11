@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center" class=" text-light">Detail Data</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="" class="form-label">Kode Bongkar</label>
                                <input class="form-control" value="{{ $bongkaran->kode_bongkaran }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Nama Sopir</label>
                                <input class="form-control"value="{{ $bongkaran->nama_sopir }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Tangal Lahir</label>
                                <input class="form-control"value="{{ $bongkaran->tanggalbongkar }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Barang</label>
                                <input class="form-control" value="{{ $bongkaran->muatan->barang }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Alamat</label>
                                <input class="form-control" value="{{ $bongkaran->alamat }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <a type="button" class="btn btn-warning" href="/bongkaran/all">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div @endsection
