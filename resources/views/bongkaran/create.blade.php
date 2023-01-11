@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center" class=" text-light">Tambah Data Bongkar</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/bongkaran/add">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Kode Bongkar</label>
                                <input class="form-control" id="kode_bongkaran" name="kode_bongkaran"
                                    value="{{ old('kode_bongkaran') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Nama Sopir</label>
                                <input class="form-control" id="nama_sopir"
                                    name="nama_sopir"value="{{ old('nama_sopir') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Tanggal Bongkar</label>
                                <input type="date" class="form-control" id="tanggalbongkar" name="tanggalbongkar"
                                    value="{{ old('tanggalbongkar') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Barang</label>
                                <select class="form-select" name="muatan_id" id="muatan_id">
                                    @foreach ($muatan as $muat)
                                        <option value="{{ $muat->id }}">{{ $muat->barang }}</option>
                                    @endforeach
                                </select>
                                {{-- <input muat="form-control"id="kode_bongkaran" name="kode_bongkaran" value="{{ $muatan->bongkaran->bongkaran }}"> --}}
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Alamat</label>
                                <input class="form-control" id="alamat" name="alamat"value="{{ old('alamat') }}">
                            </div>
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning" href="/bongkaran/all">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
