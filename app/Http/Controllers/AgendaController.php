<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use Dompdf\Adapter\PDFLib;
use Illuminate\Support\Carbon;
use Dompdf\Dompdf;
use Facade\FlareClient\View;

class AgendaController extends Controller
{
    public $dataPrint;
    public $sendAgenda;
    public function index()
    {
        $data_agenda = Agenda::orderByDesc('created_at')->get();
        return view('agenda.index')->with([
            "data_agenda" => $data_agenda
        ]);
    }

    public function create(Request $request)
    {
        // Mengirim data dari modal tambah ke databae
        \App\Models\Agenda::create($request->all);
    }

    //  Function Store
    public function store(Request $request)
    {
        $input_data = $request->all();

        //  Array 1 dimensi
        $id = DB::select("SHOW TABLE STATUS LIKE 'agenda'");
        $next_id = $id[0]->Auto_increment;
        // jika id terbaru lebih dari sama dengan 10 maka keluaranya 00 + id terbaru
        if ($next_id >= 10) {
            $input_data['id'] = '0' . $next_id;
            Agenda::create($input_data);
        } else {
            // selain itu maka 0 + id terbaru
            // default value dari nomor karyawan adalah 0 + id terbaru
            $input_data['id'] = '00' . $next_id;
            // tambah data
            Agenda::create($input_data);
        }
        return redirect()->route('agenda.index');
    }

    public function show($id)
    {
        //
    }

    // Function Edit
    public function edit($id)
    {
        $data_agenda = Agenda::findOrFail($id);
        return view('agenda.edit')->with([
            'data_agenda' => $data_agenda
        ]);
    }

    // Function Update
    public function update(Request $request, $id)
    {
        $input_update = $request->all();
        $data_spesifik = Agenda::findOrFail($id);
        $data_spesifik->update($input_update);
        return redirect()->route('agenda.index');
    }

    // Function Destroy
    public function destroy($id)
    {
        $data_spesifik = Agenda::findOrFail($id);
        $data_spesifik->delete();
        return redirect()->route('agenda.index');
    }

    // Function Search
    public function search(Request $request)
    {
        // mencari data

        $keyword = $request->keyword;
        $this->dataPrint = Agenda::where('tanggal', 'like', '%' . $keyword . '%')->orderBy('nama', 'asc')->get();
        return view('agenda.index')->with([
            'data_agenda' => $this->dataPrint
        ]);
    }

    // Function Cetak PDF
    public function cetakPdf()
    {
        $data_agenda = Agenda::orderByDesc('tanggal')->get();
        return view('agenda.cetak', compact('data_agenda'));
    }

    public function dashboard()
    {
        $data_agenda = Agenda::orderBy('waktu', 'asc')->where('tanggal', '=', Carbon::now('Asia/Jakarta')->toDateString('Y-m-d'))->get();
        $data_besok = Agenda::orderBy('waktu', 'asc')->where('tanggal', '=', Carbon::tomorrow('Asia/Jakarta')->toDateString('Y-m-d'))->get();
        return view('layouts.dashboard', ['data_agenda' => $data_agenda, 'data_besok' => $data_besok]);
    }

    public function cetakForm()
    {
        return view('agenda.cetak-agenda-form');
    }

    public function cetakAgendaPertanggal($tglawal, $tglakhir)
    {
        // dd(["Tanggal Awal : ".$tglawal, "Tanggal Akhir : ".$tglakhir]);
        $cetakPertanggal = Agenda::orderBy('tanggal', 'asc')->whereBetween('tanggal', [$tglawal, $tglakhir])->get();
        return view('agenda.cetak-agenda-pertanggal', compact('cetakPertanggal'));
    }

    public function countAgenda()
    {

        $sendAgenda = DB::table('agenda')->count();
        return view('layouts.master',['count'=>$sendAgenda]);
    }

    public function dashboard2()
    {
        $data_agenda = Agenda::orderBy('waktu', 'asc')->where('tanggal', '=', Carbon::now('Asia/Jakarta')->toDateString('Y-m-d'))->get();
        $data_besok = Agenda::orderBy('waktu', 'asc')->where('tanggal', '=', Carbon::tomorrow('Asia/Jakarta')->toDateString('Y-m-d'))->get();
        return view('layouts.dashboard2', ['data_agenda' => $data_agenda, 'data_besok' => $data_besok]);
    }

}
