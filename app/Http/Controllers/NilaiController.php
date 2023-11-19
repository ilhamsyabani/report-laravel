<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nilais = Nilai::all();
        return response()->json($nilais);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validasi request
         $request->validate([
            'user_id' => 'required|integer',
            'question_id' => 'required|string',
            'timer' => 'required|string', // Timer disimpan sebagai string (format menit:detik)
            'report' => 'string', // Timer disimpan sebagai string (format menit:detik)
        ]);

        // Ambil data dari request
        $userId = $request->input('user_id');
        $questionId = $request->input('question_id');
        $timer = $request->input('timer');
        $report = $request->input('report');
        $score = $request->input('nilai');

        // Simpan data ke dalam tabel nilais
        $nilai = new Nilai();
        $nilai->user_id = $userId;
        $nilai->question_id = $questionId;
        $nilai->timer = $timer;
        $nilai->nilai =  $score;
        $nilai->report =  $report;
        // Lakukan logika lain jika perlu

        // Simpan data
        $nilai->save();

        // Berikan response sukses jika data berhasil disimpan
        return response()->json(['message' => 'Data berhasil disimpan'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nilai $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nilai $nilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nilai $nilai)
    {
        //
    }
}
