<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Exports\DonasiExport;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Exception;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use DB;
class DonasiController extends Controller
{
    public function index()
    {
        $donasi = Donasi::get();

        $count_donasi = DB::table('donasis')
        ->select(DB::raw('count(id) as `total`'),  DB::raw('MONTH(created_at) bulan'))
        ->groupby('bulan')
        ->get();

        return view('donasi.index',compact('donasi','count_donasi'));
    }
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'alasan' => 'required',
                'nama' => 'required',
                'jenis' => 'required',
                'lokasi' => 'required',
                'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        }catch (Exception $e) {
            return response()->json([
                'alert' => 'error',
                'message' => 'Maaf sepertinya ada kesalahan,silahkan ulang.',
            ]);
        }
        try {
            $gambar = request()->file('gambar')->store("donasi");
            $donasi = new Donasi;
            $donasi->alasan = $request->alasan;
            $donasi->user_id = Auth::user()->id;
            $donasi->nama = $request->nama;
            $donasi->jenis = $request->jenis;
            $donasi->lokasi = $request->lokasi;
            $donasi->gambar = $gambar;
            $donasi->save();
            return response()->json([
                'alert' => 'success',
                'message' => 'Donasi '. $request->nama . ' sedang diproses',
            ]);
        }catch (Exception $e) {
            return response()->json([
                'alert' => 'error',
                'message' => 'Maaf sepertinya ada kesalahan,silahkan ulang.',
            ]);
        }
    }
    public function deny(Donasi $donasi)
    {
        $donasi->st = "Deny";
        $donasi->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Donasi '. $donasi->user->name . ' has been deny',
        ]);
    }
    public function acc(Donasi $donasi)
    {
        $donasi->st = "Accept";
        $donasi->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Donasi '. $donasi->user->name . ' telah di terima',
        ]);
    }
    public function pdf()
    {
        $donasi = Donasi::all();

    	$pdf = PDF::loadview('donasi.pdf',['donasi'=>$donasi]);
    	return $pdf->download('laporan-donasi.pdf');
    }
    public function excel()
    {
        return Excel::download(new DonasiExport, 'donasi.xlsx');
    }
    public function edit(Donasi $donasi)
    {
        return view('donasi.edit', compact('donasi') );
    }
    public function update_donasi(Request $request, Donasi $donasi)
    {
        try {
            $this->validate($request, [
                'alasan' => 'required',
                'nama' => 'required',
                'jenis' => 'required',
                'lokasi' => 'required',
            ]);
        }catch (Exception $e) {
            return response()->json([
                'alert' => 'error',
                'message' => 'Maaf sepertinya ada kesalahan,silahkan ulang.',
            ]);
        }
        try {
            if(request()->file('gambar')){
                Storage::delete($donasi->gambar);
                $photo = request()->file('gambar')->store("donasi");
                $donasi->gambar = $photo;
            }
            $donasi->alasan = $request->alasan;
            $donasi->nama = $request->nama;
            $donasi->st = "Pending";
            $donasi->jenis = $request->jenis;
            $donasi->lokasi = $request->lokasi;
            $donasi->update();
            return response()->json([
                'alert' => 'success',
                'message' => 'update donasi '. $request->nama . ' sedang diproses',
            ]);
        }catch (Exception $e) {
            return response()->json([
                'alert' => 'error',
                'message' => 'Maaf sepertinya ada kesalahan,silahkan ulang.',
            ]);
        }
    }
}
