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
    public function showMenusByCategory($token, $category_id)
    {
        $category = Category::find($category_id);

        if ($category) {
            $menus = $category->menus;
            $categories = $this->getCategory();
            return view('kiosks.start_kiosk', ['token' => $token, 'menus' => $menus, 'categories' => $categories]);
        } else {
            return redirect()->back()->with('error', 'Catégorie non trouvée.');
        }
    }
    public function kiosk_select($token, $id)
    {
        $menu = Menu::find($id);
        $categories = $this->getCategory();

        if ($menu) {
            $items = $menu->items()->get();
            return view('kiosks.show_menu', ['token' => $token, 'items' => $items, 'categories' => $categories, 'menu' => $menu]);
        } else {
            return redirect()->back()->with('error', 'Menu non trouvée.');
        }
    }
    public function getCategory()
    {
        $user = Auth::user();
        $kioksId = $user->kiosk->id;
        return Kiosk::find($kioksId)->categories;
    }
}
