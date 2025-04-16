<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Http\Controllers\Controller;

class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::all();
        return view('barang.index', compact('data'));
    }

    public function store(Request $request)
    {
        Barang::create($request->all());
        return redirect('/');
    }

    public function destroy($id)
    {
        Barang::destroy($id);
        return redirect('/');
    }
}
