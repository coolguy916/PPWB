<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function list_hero()
    {
        $pages = Page::all();

        return view('admin/list_hero', compact('pages'));
    }

    public function create()
    {
        return view('admin/form_adminhome');
    }

    public function storeadminhome(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'path' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        // Upload image
        $path = $request->file('path')->store('public/hero');

        // Simpan informasi gambar ke tabel 'pages'
        $page = new Page();
        $page->path = $path;
        $page->save();

        // Redirect to a view or route after successfully creating the record
        return redirect()->route('list_hero')->with(['success' => 'Data Berhasil Disimpan!']);
    }


    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();

        return redirect()->route('list_hero')->with('success', 'Page deleted successfully');
    }


}
