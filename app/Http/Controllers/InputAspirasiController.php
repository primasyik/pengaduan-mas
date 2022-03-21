<?php

namespace App\Http\Controllers;

use App\Models\InputAspirasi;
use App\Models\Penduduk;
use App\Models\Aspirasi;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class InputAspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search'))
        {
            $input_aspirasi = DB::table('aspirasis')
                            ->select('*')
                            ->join('input_aspirasis','aspirasis.category_id','=','input_aspirasis.category_id')
                            ->join('categories','aspirasis.category_id','=','categories.id')
                            ->where(
                            'nik_penduduk', 'LIKE', '%'."$request->search".'%')
                            ->orWhere('lokasi', 'LIKE', '%'. $request->search .'%')
                            ->orWhere('status', 'LIKE', '%'. $request->search .'%')
                            ->get();
        }else{
            $input_aspirasi = DB::table('aspirasis')
                            ->select('*')
                            ->join('input_aspirasis','aspirasis.category_id','=','input_aspirasis.category_id')
                            ->join('categories','aspirasis.category_id','=','categories.id')
                            ->get();
        }
        return view('aspirasi.aspirasi', compact('input_aspirasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nik' => 'required',
            'alamat' => 'required',
            'kategori' => 'required',
            'lokasi' => 'required',
            'keterangan' => 'required',
        ]);
        // cek apakah di database ada nik atau belum
        $penduduk = Penduduk::where(['nik' => $request->nik])->count();
        // jika tidak ada
        if($penduduk == 0){
            $penduduk = new Penduduk([
                'nik' => $request->input('nik'),
                'alamat' => $request->input('alamat'),
            ]);
            $penduduk->save();
        }
            $aspirasi = new Aspirasi([   
                'status' => "menunggu",
                'category_id' => $request->input('kategori'),
                'feedback' => "Mohon Sabar Menunggu",
            ]);
            $aspirasi->save();
            
            $inputAspirasi = new InputAspirasi([   
            'nik_penduduk' => $request->input('nik'),
            'category_id' => $aspirasi->category_id,
            'lokasi' => $request->input('lokasi'),
            'keterangan' => $request->input('keterangan'),
            ]);
        
            $inputAspirasi->save();

            return redirect('/aspirasi')->with('message', 'Data berhasil ditambahka');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InputAspirasi  $inputAspirasi
     * @return \Illuminate\Http\Response
     */
    public function show(InputAspirasi $inputAspirasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InputAspirasi  $inputAspirasi
     * @return \Illuminate\Http\Response
     */
    public function edit(InputAspirasi $inputAspirasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InputAspirasi  $inputAspirasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InputAspirasi $inputAspirasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InputAspirasi  $inputAspirasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(InputAspirasi $inputAspirasi)
    {
        //
    }
}
