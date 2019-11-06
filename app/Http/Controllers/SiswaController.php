<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class SiswaController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students  = Student::all();
        return view('siswa.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('siswa.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Student::insert([
            'nama' => $request->nama,
            'contact' => $request->contact
        ]);

        return redirect('/siswa')->withStatus(__('Data Siswa Telah Di Tambahkan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $students  = Student::where('id',$id)->get();
        return view('siswa.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        Student::where('id',$request->id)->update([
            'nama' => $request->nama,
            'contact' => $request->contact
        ]);
        return redirect('/siswa')->withStatus(__('Data Siswa Telah Di Update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Student::where('id', $id)->delete();
        return redirect('/siswa')->withStatus(__('Data Telah Di Hapus'));
    }
}
