<?php

namespace App\Http\Controllers;

use App\Models\DataTesting;
use App\Models\DataTraining;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HasilController extends Controller
{
    //
    public function getHasil()
    {
        $testing = DataTesting::all();
        foreach ($testing as $data) {
            if ($data->rataRapor >= 50) {
                $data->nilai = "Diterima";
            } else {
                $data->nilai = "Ditolak";
            }
        }
        return view('admin.hasilKlasifikasi')
            ->with('testing', $testing);
    }
}
