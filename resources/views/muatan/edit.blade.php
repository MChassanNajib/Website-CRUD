@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center" class=" text-light">Edit Data Muatan</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/muatan/update/ {{ $muatan->id }}">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Kode Muatan</label>
                                <input class="form-control" id="kode_muatan" name="kode_muatan"
                                    value="{{ old('kode_muatan', $muatan->kode_muatan) }}" disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Nama Sopir</label>
                                <input class="form-control" id="nama_sopir"
                                    name="nama_sopir"value="{{ old('nama_sopir', $muatan->nama_sopir) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Barang</label>
                                <input class="form-control" id="barang"
                                name="barang"value="{{ old('barang', $muatan->barang) }}" required>
                            </div>
                            <br>
                            {{-- <div class="form-group">
                                <label for="" class="form-label">Diagnosa</label>
                                <select class="form-select" name="dokter_id">
                                    @foreach ($dokter as $doctor)
                                        @if (old('dokter_id', $dokter->dokter_id == $doctor->id))
                                            <option name="dokter_id" value="{{ $doctor->id }}" selected>{{ $doctor->keahlian }}
                                            </option>
                                        @endif
                                        <option name="dokter_id" value="{{ $doctor->id }}">{{ $doctor->keahlian }}</option>
                                    @endforeach
                                </select>
                                <input class="form-control"id="kode_dokter" name="kode_dokter" value="{{ $dokter->dokter->eahlian }}">
                            </div>
                            <br> --}}
                            <div class="form-group">
                                <label for="" class="form-label">Telepon</label>
                                <input class="form-control" id="telepon"
                                name="telepon"value="{{ old('telepon', $muatan->telepon) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Alamat</label>
                                <input class="form-control" id="alamat"
                                name="alamat"value="{{ old('alamat', $muatan->alamat) }}" required>
                            </div>
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning" href="/muatan/all">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
