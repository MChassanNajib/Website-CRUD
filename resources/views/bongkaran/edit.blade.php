@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center" class=" text-light">Edit Data Bongkar</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/bongkaran/update/ {{ $bongkaran->id }}">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Kode Bongkaran</label>
                                <input class="form-control" id="kode_bongkaran" name="kode_bongkaran"
                                    value="{{ old('kode_bongkaran', $bongkaran->kode_bongkaran) }}" disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Nama Sopir</label>
                                <input class="form-control" id="nama_sopir"
                                    name="nama_sopir"value="{{ old('nama_sopir', $bongkaran->nama_bongkaran) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Tanggal Lahir</label>
                                <input class="form-control" id="tanggalbongkar"
                                name="tanggalbongkar"value="{{ old('tanggalbongkar', $bongkaran->tanggalbongkar) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Barang</label>
                                <select class="form-select" name="muatan_id">
                                    @foreach ($muatan as $muat)
                                        @if (old('muatan_id', $bongkaran->muatan_id == $muat->id))
                                            <option name="muatan_id" value="{{ $muat->id }}" selected>{{ $muat->barang }}
                                            </option>
                                        @endif
                                        <option name="muatan_id" value="{{ $muat->id }}">{{ $muat->barang }}</option>
                                    @endforeach
                                </select>
                                {{-- <input class="form-control"id="kode_bongkaran" name="kode_bongkaran" value="{{ $bongkaran->muatan->barang }}"> --}}
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Alamat</label>
                                <input class="form-control" id="alamat"
                                name="alamat"value="{{ old('alamat', $bongkaran->alamat) }}" required>
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
