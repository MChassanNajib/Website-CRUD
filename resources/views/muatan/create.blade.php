@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center" class=" text-light">Tambah Data Muatan</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/muatan/add">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Kode Bongkar</label>
                                <input type="number" class="form-control" id="kode_muatan" name="kode_muatan"
                                    value="{{ old('kode_muatan') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Nama Sopir</label>
                                <input class="form-control" id="nama_sopir"
                                    name="nama_sopir"value="{{ old('nama_sopir') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Barang</label>
                                <input class="form-control" id="barang"
                                    name="barang"value="{{ old('barang') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Telepon</label>
                                <input class="form-control" id="telepon" name="telepon"
                                    value="{{ old('telepon') }}">
                            </div>
                            <br>
                            {{-- <div class="form-group">
                                <label for="" class="form-label">Diagnosa</label>
                                <select class="form-select" name="dokter_id" id="dokter_id">
                                    @foreach ($dokter as $doctor)
                                        <option value="{{ $doctor->id }}">{{ $doctor->keahlian }}</option>
                                    @endforeach
                                </select>
                                <input doctor="form-control"id="kode_dokter" name="kode_dokter" value="{{ $Dokter->kelas->kelas }}">
                            </div>
                            <br> --}}
                            <div class="form-group">
                                <label for="" class="form-label">Alamat</label>
                                <input class="form-control" id="alamat" name="alamat"value="{{ old('alamat') }}">
                            </div>
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning" href="/dokter/all">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
