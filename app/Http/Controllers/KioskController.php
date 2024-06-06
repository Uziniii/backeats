<?php

namespace App\Http\Controllers;

use App\Models\Kiosk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Menu;
use App\Models\Category;

class KioskController extends Controller
{
    public function start_kiosk($token)
    {
        $userWithKioskToken = User::where('kiosk_token', $token)->first();
        $categories = $this->getCategory();

        if ($userWithKioskToken) {
            $menus = Menu::all();
            return view('/kiosks/start_kiosk', ['token' => $token, 'menus' => $menus, 'categories' => $categories]);
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
    public function getCategory() 
    {
        $user = Auth::user();
        $kioksId = $user->kioks->id;
        return Kiosk::find($kioksId)->categories;
    }   
}


