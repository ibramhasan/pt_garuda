<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Employies;
use App\Http\Controllers\Controller;

class EmployiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan= Employies::all();
        return view('karyawan.karyawan_list', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawan= Employies::all();
        return view('karyawan.karyawan_create', compact('karyawan'));
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
          'nama_karyawan' => 'required|max:255',
          'status_karyawan' => 'required|max:255',
          'foto_karyawan' => 'file|mimes:jpeg,jpg,png|max:5048',
          'alamat_karyawan' => 'required|max:255',
          'email_karyawan' => 'required|max:255',
          'divisi' => 'required|max:255',
          'tanggal_masuk' => 'required|date'
        ]);

        $karyawan= New Employies;

        $karyawan->nama_karyawan= $request->nama_karyawan;
        $karyawan->status_karyawan= $request->status_karyawan;
        $karyawan->alamat_karyawan= $request->alamat_karyawan;
        $karyawan->email_karyawan= $request->email_karyawan;
        $karyawan->divisi= $request->divisi;
        $karyawan->tanggal_masuk= $request->tanggal_masuk;

        if ($request->hasFile('foto_karyawan')) {
          $file= $request->file('foto_karyawan');
          $filename= time() . "" . $file->getClientOriginalName();
          $request->file('foto_karyawan')->move('fotokaryawan/', $filename);

          $karyawan->foto_karyawan= $filename;
          $karyawan->save();
        }

        return redirect()->route('karyawan.index');
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
        $karyawan= Employies::findOrFail($id);
        return view('karyawan.karyawan_update', compact('karyawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'nama_karyawan' => 'required|max:255',
        'status_karyawan' => 'required|max:255',
        'foto_karyawan' => 'file|mimes:jpeg,jpg,png|max:5048',
        'alamat_karyawan' => 'required|max:255',
        'email_karyawan' => 'required|max:255',
        'divisi' => 'required|max:255',
        'tanggal_masuk' => 'required|date'
      ]);
      $data= Employies::where('id', $id)->first();
      $data->nama_karyawan= $request->nama_karyawan;
      $data->status_karyawan= $request->status_karyawan;
      $data->alamat_karyawan= $request->alamat_karyawan;
      $data->email_karyawan= $request->email_karyawan;
      $data->divisi= $request->divisi;
      $data->tanggal_masuk= $request->tanggal_masuk;

      if ($request->file('foto_karyawan') == "") {
        $data->file= $data->file;
      } else {
        if($request->hasFile('foto_karyawan')) {
          $file= 'fotokkaryawan/'.$data->foto_karyawan;
          if (is_file($file)) {
            unlink($file);
          }
          $file= $request->file('foto_karyawan');
          $filename= $file->getClientOriginalName();
          $request->file('foto_karyawan')->move('fotokaryawan/', $filename);

          $data->foto_karyawan= $filename;
        }
      }
      $data->save();
      return redirect()->route('karyawan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $karyawan= Employies::findOrFail($id);
      $karyawan->delete();
      return redirect()->route('karyawan.index');
    }
}
