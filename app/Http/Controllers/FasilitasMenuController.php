<?php

namespace App\Http\Controllers;

use App\FasilitasGambar;
use App\FasilitasMenu;
use Illuminate\Http\Request;

class FasilitasMenuController extends Controller
{
    public function index()
    {
        return view('admin.fasilitas.index');
    }

    public function fasilitasmenu($menu_id)
    {
        $fasilitas_menu = FasilitasMenu::find($menu_id);
        $fasilitas_gambar = FasilitasGambar::where('fasilitas_menu_id', $menu_id)->paginate(10)->appends('fasilitas_menu_id', $menu_id);
        return view('admin.fasilitas.menu', ['fasilitas_menu' => $fasilitas_menu, 'fasilitas_gambar' => $fasilitas_gambar]);
    }

    public function editfasilitasmenu($menu_id)
    {
        $fasilitas_menu = FasilitasMenu::find($menu_id);
        return view('admin.fasilitas.edit', ['fasilitas_menu' => $fasilitas_menu]);
    }

    public function updatefasilitasmenu($menu_id, Request $request)
    {
        $request->validate([
            'nama_menu' => 'required'
        ]);
        $fasilitas_menu = FasilitasMenu::find($menu_id);
        $fasilitas_menu->nama_menu = $request->nama_menu;
        $fasilitas_menu->deskripsi = $request->deskripsi;
        $fasilitas_menu->save();
        return $this->fasilitasmenu($fasilitas_menu->id);
    }

    public function deletefasilitasmenu($menu_id)
    {
        FasilitasGambar::where('fasilitas_menu_id', $menu_id)->delete();
        FasilitasMenu::destroy($menu_id);
        return redirect()->action('FasilitasMenuController@index');
    }

    public function createmenu()
    {
        return view('admin.fasilitas.createmenu');
    }

    public function savemenu(Request $request)
    {
        $request->validate([
            'nama_menu' => 'required'
        ]);
        FasilitasMenu::create([
            'nama_menu' => $request->nama_menu,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->action('FasilitasMenuController@index');
    }

    public function createitem($menu_id)
    {
        $fasilitas_menu = FasilitasMenu::find($menu_id);
        return view('admin.fasilitas.createitem', ['fasilitas_menu' => $fasilitas_menu]);
    }

    public function saveitem($menu_id, Request $request)
    {
        $fasilitas_item = FasilitasGambar::create([
            'fasilitas_menu_id' => $menu_id,
            'text' => $request->text,
        ]);

        if ($request->gambar != null) {
            $file = $request->file('gambar');
            $imageName = $fasilitas_item->id . '.fasilitasitem.' . $file->getClientOriginalExtension();
            $path = $request->file('gambar')->storeAs('public/fasilitasitem/', $imageName);
            $fasilitas_item->gambar = 'fasilitasitem/' . $imageName;
            $fasilitas_item->save();
        }
        return $this->fasilitasmenu($menu_id);
    }

    public function edititem($item_id)
    {
        $item = FasilitasGambar::find($item_id);
        $fasilitas_menu = FasilitasMenu::find($item->fasilitas_menu_id);
        return view('admin.fasilitas.edititem', ['fasilitas_menu' => $fasilitas_menu, 'item' => $item]);
    }

    public function updateitem($item_id, Request $request)
    {
        $fasilitas_item = FasilitasGambar::find($item_id);
        $fasilitas_item->text = $request->text;

        if ($request->pilihan_gambar == 'hapus') {
            $fasilitas_item = null;
        } elseif ($request->pilihan_gambar == 'ganti') {
            if ($request->gambar != null) {
                $file = $request->file('gambar');
                $imageName = $fasilitas_item->id . '.fasilitasitem.' . $file->getClientOriginalExtension();
                $path = $request->file('gambar')->storeAs('public/fasilitasitem/', $imageName);
                $fasilitas_item->gambar = 'fasilitasitem/' . $imageName;
            }
        }
        $fasilitas_item->save();
        return $this->fasilitasmenu($fasilitas_item->fasilitas_menu_id);
    }

    public function deleteitem($item_id)
    {
        $item = FasilitasGambar::find($item_id);
        $menu_id = $item->fasilitas_menu_id;
        FasilitasGambar::destroy($item_id);
        return $this->fasilitasmenu($menu_id);
    }


    public function indexmenu($menu_id)
    {
        $fasilitas_menu_2 = FasilitasMenu::find($menu_id);
        $fasilitas_gambar = FasilitasGambar::where('fasilitas_menu_id', $menu_id)->paginate(10)->appends('fasilitas_menu_id', $menu_id);
        return view('fasilitas.index', ['fasilitas_menu_2' => $fasilitas_menu_2, 'fasilitas_gambar' => $fasilitas_gambar]);
    }
}
