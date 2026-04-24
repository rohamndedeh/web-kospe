<?php

namespace App\Http\Controllers;

use App\Mail\NotifikasiKeKaryawan;
use App\Models\IzinCuti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IzinController extends Controller
{
    public function approve($id)
    {
        $izin = IzinCuti::where('approval_token', $id)->firstOrFail();

        if ($izin->approve_1 == 'disetujui') {
            return view('approval', [
                'status' => 'already',
                'izin' => $izin
            ]);
        }

        // update status
        $izin->approve_1 = 'disetujui';
        $izin->tgl_approve_1 = now();
        $izin->save();

        return view('approval', [
            'status' => 'disetujui',
            'izin' => $izin
        ]);
    }
    public function pengurus($id)
    {
        $izin = IzinCuti::where('approval_token', $id)->firstOrFail();

        if ($izin->approve_2 == 'disetujui') {
            return view('approval', [
                'status' => 'already',
                'izin' => $izin
            ]);
        }

        // update status
        $izin->approve_2 = 'disetujui';
        $izin->tgl_approve_2 = now();
        $izin->save();

        return view('approval', [
            'status' => 'disetujui',
            'izin' => $izin
        ]);
    }
}
