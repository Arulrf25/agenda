<?php

namespace App\Http\Controllers;

use App\Models\Logbook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use PDF;
use Dompdf\Adapter\PDFLib;
use Illuminate\Support\Carbon;
use Dompdf\Dompdf;

class LogbookController extends Controller
{
    public $printData;
    public $sendLogbook;
    public function index()
    {
        $data_tamu = Logbook::orderByDesc('tanggal')->get();

        return view('logbook.buku_tamu')->with([
            "data_tamu" => $data_tamu
        ]);
    }

    public function create(Request $request)
    {
        // Mengirim data dari modal tambah ke databae
        \App\Models\Logbook::create($request->all);
    }

    //  Function Store
    public function store(Request $request)
    {
        $inputData = $request->all();
        //  Array 1 dimensi
        $id = DB::select("SHOW TABLE STATUS LIKE 'logbook'");
        $id_next = $id[0]->Auto_increment;
        // jika id terbaru lebih dari sama dengan 10 maka keluaranya 00 + id terbaru
        if ($id_next >= 10) {
            $inputData['id'] = '0' . $id_next;
            Logbook::create($inputData);
        } else {
            // selain itu maka 0 + id terbaru
            // default value dari nomor karyawan adalah 0 + id terbaru
            $inputData['id'] = '00' . $id_next;
            // tambah data
            Logbook::create($inputData);
        }
        return redirect()->route('logbook.index');
    }

    public function show($id)
    {
        //
    }

    // Function Edit
    public function edit($id)
    {
        $data_tamu = Logbook::findOrFail($id);
        return view('logbook.edit')->with([
            "data_tamu" => $data_tamu
        ]);
    }

    // Function Update
    public function update(Request $request, $id)
    {
        $inputUpdate = $request->all();
        $dataSpesifik = Logbook::findOrFail($id);
        $dataSpesifik->update($inputUpdate);
        return redirect()->route('logbook.index');
    }

    // Function Destroy
    public function destroy($id)
    {
        $dataSpesifik = Logbook::findOrFail($id);
        $dataSpesifik->delete();
        return redirect()->route('logbook.index');
    }

    // Function Search
    public function cari(Request $request)
    {
        // mencari data

        $keyword = $request->keyword;
        $this->printData = Logbook::where('tanggal', 'like', '%' . $keyword . '%')->orderBy('tanggal', 'asc')->get();
        return view('logbook.buku_tamu')->with([
            'data_tamu' => $this->printData
        ]);
    }

    // Function Cetak PDF
    public function cetakLogbook()
    {
        $data_tamu = Logbook::orderByDesc('tanggal')->get();
        return view('logbook.cetak_logbook', compact('data_tamu'));
    }

    public function cetakForm()
    {
        return view('logbook.cetak-logbook-form');
    }

    public function cetakLogbookPertanggal($tglawal, $tglakhir)
    {
        // dd(["Tanggal Awal : ".$tglawal, "Tanggal Akhir : ".$tglakhir]);
        $cetakPertanggal = Logbook::orderBy('nama', 'asc')->whereBetween('tanggal', [$tglawal, $tglakhir])->get();
        return view('logbook.cetak-logbook-pertanggal', compact('cetakPertanggal'));
    }

    public function countLogbook()
    {

        $sendLogbook = DB::table('logbook')->count();
        return view('layouts.master',['countlog'=>$sendLogbook]);
    }
}
