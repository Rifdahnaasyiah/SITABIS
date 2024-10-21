<?php

namespace App\Http\Controllers;

use App\Models\Quesioner;

class QuesionerController extends Controller
{
    public function index()
    {
        $datas = Quesioner::all();
        return view('quesioner', compact('datas'));
    }
}
