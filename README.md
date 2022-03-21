Pencarian

buat form dengan method action dan name yang sudah disesuaikan


1. method index kasih parameter class request untuk menerima inputan dari form pencarian

2. tes dengan dd $request

Route::get('/aspirasi-penduduk', function(){
    $aspirasipenduduk =  DB::table('penduduks')
    ->select('*')
    ->join('input_aspirasis','penduduks.nik','=','input_aspirasis.nik_penduduk')
    ->get();

    return view('aspirasipenduduk', compact('aspirasipenduduk') );
});