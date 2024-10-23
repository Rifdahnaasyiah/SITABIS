<?php

namespace App\Http\Controllers;

use App\Models\PhbsAnswer;
use App\Models\Quesioner;
use Illuminate\Http\Request;

class QuesionerController extends Controller
{
    public function index()
    {
        $datas = Quesioner::all();
        return view('quesioner', compact('datas'));
    }

    public function store(Request $request)
    {
//        $masyarakat = DataMasryarakat::create([
//            'nama' => $request->nama,
//            'usia' => $request->usia,
//            'alamat' => $request->alamat,
//            'desa' => $request->desa,
//            'no_telp' => $request->no_telp,
//            'kondisi_keluarga' => $request->kondisi_keluarga,
//            'tipe_persalinan' => $request->tipe_persalinan,
//            'usia_bayi' => $request->usia_bayi,
//            'kondis_bayi' => $request->kondis_bayi,
//            'jml_keluarga' => $request->jml_keluarga,
//        ]);
        $pertanyaan = Quesioner::get();
        foreach ($pertanyaan as $key => $data) {
            PhbsAnswer::create([
                'quesioners_id' => $key + 1,
                'data_masryarakats_id' => 1,
//                'data_masryarakats_id' => $masyarakat->id,
                'value' => $request->get($data->id)
            ]);
        }

        return 'data berhasil dibuat';
    }
}
