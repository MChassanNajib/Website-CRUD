<?php

namespace App\Http\Controllers;

use App\Models\Bongkaran;
use App\Models\Muatan;
use Illuminate\Http\Request;

class MuatanController extends Controller
{
    public function index(){
        // return view('muatan.all',[
        //     "data_muatan" => Muatan::all()
        // ]);

        $data_bongkaran = Bongkaran::with('muatan')->get();
        $data_muatan = Muatan::with('bongkaran')->get();
        return view('muatan.all',compact('data_muatan','data_bongkaran'));
    }

    public function show (Muatan $muatan){
        return view('muatan.detail',[
            "muatan" => $muatan
        ]);
    }
    public function create (){
        return view('muatan.create',[
            "muatan" => Muatan::all()
        ]);
    }
    public function store (Request $request) {
        $validateData = $request->validate([
                'kode_muatan' => 'required|unique:muatans',
                'nama_sopir' => 'required|max:255',
                'barang' => 'required',
                'telepon' => 'required',
                'alamat' => 'required',
            ]);

            Muatan::create($validateData);
            return redirect('/muatan/all')->with('Successfully','Data Muatan Baru Berhasil Ditambahkan 1');
    }
    public function destroy (Muatan $muatan){
        Muatan::destroy($muatan->id);
        return redirect('/muatan/all' )-> with('Successfully','Data Muatan berhasil dihapus !');
    }

    public function edit (Muatan $muatan) {
        return view('muatan.edit', [
            'muatan'=>$muatan
        ]);
    }

    public function update (Request $request, Muatan $muatan) {
        $rules =[
            'nama_sopir' => 'required|max:255',
            'barang' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
        ];

            $validateData = $request->validate($rules);
            Muatan::where('id', $muatan->id)->update($validateData);
            return redirect('/muatan/all')->with('Successfully','Data Muatan Berhasil DiUbah !');
    }
}
