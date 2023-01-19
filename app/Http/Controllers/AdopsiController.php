<?php

namespace App\Http\Controllers;

use App\Models\Adopsi;
use App\Models\Donasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class AdopsiController extends Controller
{
    public function index_pengadopsi()
    {
        $adopsi = Adopsi::get();
        return view('adopsi.pengadopsi',compact('adopsi'));
    }
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $keywords = $request->keywords;
            $jenis = $request->jenis;
            $orderby = $request->orderby?:'asc';
            if($jenis != "semua"){
                $data = Donasi::where('st','!=','Adopted')->where('st','!=','Pending')->where('jenis',$jenis)->where('nama','like','%'.$keywords.'%')->where('st','!=','Pending')->orderBy('nama',$orderby)->paginate(1);
            }else{
                $data = Donasi::where('st','!=','Adopted')->where('st','!=','Pending')->where('nama','like','%'.$keywords.'%')->where('st','!=','Pending')->orderBy('nama',$orderby)->paginate(1);
            }
            return view('adopsi.list',compact('data'));
        }
        return view('adopsi.index');
    }
    public function create()
    {
    }
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'alasan' => 'required',
                'lokasi' => 'required',
            ]);
        }catch (Exception $e) {
            return response()->json([
                'alert' => 'error',
                'message' => 'Sorry, looks like there are some errors detected, please try again.',
            ]);
        }
        try {
            $adopsi = new Adopsi;
            $adopsi->donasi_id = $request->donasi_id;
            $adopsi->user_id = Auth::user()->id;
            $adopsi->lokasi = $request->lokasi;
            $adopsi->alasan = $request->alasan;
            $adopsi->save();
            return response()->json([
                'alert' => 'success',
                'message' => 'Adopsi '. $request->nama . ' akan di proses',
            ]);
        }catch (Exception $e) {
            return response()->json([
                'alert' => 'error',
                'message' => 'Sorry, looks like there are some errors detected, please try again.',
            ]);
        }
    }
    public function show(Donasi $donasi)
    {
        return view('adopsi.create',compact('donasi'));
    }
    public function edit(Adopsi $adopsi)
    {
        //
    }
    public function update(Request $request, Adopsi $adopsi)
    {
        //
    }
    public function deny(Adopsi $adopsi)
    {
        $adopsi->st = "Deny";
        $adopsi->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Adopsi '. $adopsi->user->name . ' telah ditolak',
        ]);
    }
    public function acc(Adopsi $adopsi)
    {
        $adopsi->st = "Accept";
        $adopsi->update();
        $donasi = Donasi::find($adopsi->donasi_id);
        $donasi->st = "Adopted";
        $donasi->update();

        return response()->json([
            'alert' => 'success',
            'message' => 'Adopsi '. $adopsi->user->name . ' telah diterima',
        ]);
    }
}
