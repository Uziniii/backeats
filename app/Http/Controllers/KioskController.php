<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class KioskController extends Controller
{

    public function start_kiosk($token)
    {
        $userWithKioskToken = User::where('kiosk_token', $token)->first();
    
        if ($userWithKioskToken) {
            return view('/kiosks/start_kiosk', ['token' => $token]);
        } else {
            return redirect()->back()->with('error', 'ID non valide pour démarrer le kiosque.');
        }
    }
}
