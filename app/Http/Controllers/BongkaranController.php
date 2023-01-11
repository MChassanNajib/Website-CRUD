<?php

namespace App\Http\Controllers;

use App\Models\Bongkaran;
use App\Models\Muatan;
use Illuminate\Http\Request;

class BongkaranController extends Controller
{
    public function index(){
        // return view('bongkaran.all',[
        //     "data_bongkaran" => Bongkaran::all()
        // ]);

        $data_bongkaran = Bongkaran::with('muatan')->get();
        $data_muatan = Muatan::with('bongkaran')->get();
        return view('bongkaran.all',compact('data_bongkaran','data_muatan'));
    }
    public function show (Bongkaran $bongkaran){
        return view('bongkaran.detail',[
            "bongkaran" => $bongkaran
        ]);
    }
    public function create (){
        return view('bongkaran.create',[
            "muatan" => Muatan::all()
        ]);
    }
    public function store (Request $request) {
        $validateData = $request->validate([
                'muatan_id' => 'required',
                'kode_bongkaran' => 'required|unique:bongkarans',
                'nama_sopir' => 'required|max:255',
                'tanggalbongkar' => 'required|date_format:Y-m-d',
                'alamat' => 'required',
            ]);

            Bongkaran::create($validateData);
            return redirect('/bongkaran/all')->with('Successfully','Data Bongkaran Baru Berhasil Ditambahkan 1');
    }
    public function destroy (Bongkaran $bongkaran){
        Bongkaran::destroy($bongkaran->id);
        return redirect('/bongkaran/all' )-> with('Successfully','Data Bongkaran berhasil dihapus !');
    }

    public function edit (Bongkaran $bongkaran) {
        return view('bongkaran.edit', [
            'muatan' => Muatan::all(),
            'bongkaran'=>$bongkaran
        ]);
    }

    public function update (Request $request, Bongkaran $bongkaran) {
        $rules =[
                'bongkaran_id' => 'required',
                'nama_sopir' => 'required|max:255',
                'tanggalbongkar' => 'required|date_format:d-m-Y',
                'alamat' => 'required',
        ];

            $validateData = $request->validate($rules);
            Bongkaran::where('id', $bongkaran->id)->update($validateData);
            return redirect('/bongkaran/all')->with('Successfully','Data Bongkaran Berhasil Di Ubah !');
    }
}
