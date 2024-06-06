<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Menu;

class KioskController extends Controller
{
    public function start_kiosk($token)
    {
        $userWithKioskToken = User::where('kiosk_token', $token)->first();
    
        if ($userWithKioskToken) {
            $menus = Menu::all();
            return view('/kiosks/start_kiosk', ['token' => $token, 'menus' => $menus]);
        } else {
            return redirect()->back()->with('error', 'ID non valide pour démarrer le kiosque.');
        }
    }

    public function kiosk_select($token, $id)
    {
        $menu = Menu::find($id);
    
        if($menu) {
            $items = $menu->items()->get();
            
            foreach($items as $item) {
                echo $item;
            }
        } else {
            return "Menu non trouvé.";
        }
    }
}
