<?php

namespace App\Http\Controllers;

use App\Models\Details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailsController extends Controller
{
    public function index()
    {
        $data_users = Details::orderBy('name', 'asc')->get();
        return view('details.detail_users')->with([
            "data_users" => $data_users
        ]);
    }

    // Function Destroy
    public function destroy($id)
    {
        $dataSpesifik = Details::findOrFail($id);
        $dataSpesifik->delete();
        return redirect()->route('details.index');
    }

    // Function Cetak PDF
    public function cetakUsers()
    {
        $data_users = Details::orderBy('name', 'asc')->get();
        return view('details.cetak_users', compact('data_users'));
    }
}
