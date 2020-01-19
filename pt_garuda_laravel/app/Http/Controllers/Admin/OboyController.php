<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\OfficeBoy;


class OboyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = OfficeBoy::all();
        return view('pages.admin.officeboy.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.officeboy.create');
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
            'nama' => 'required',
            'status' => 'required',
            'foto' => 'file|mimes:jpeg,png,jpg|max:2048',
            'alamat' => 'required',
            'email' => 'required',
            'tanggal_masuk' => 'required'
        ]);

        $data = new OfficeBoy;

        $data->nama = $request->nama;
        $data->status = $request->status;
        $data->alamat = $request->alamat;
        $data->email = $request->email;
        $data->tanggal_masuk = $request->tanggal_masuk;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . "" . $file->getClientOriginalName();
            $request->file('foto')->move('fotoOB/', $filename);

            $data->foto = $filename;
            $data->save();
        }

        return redirect()->route('officeboy.index');
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
        //
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
    }
}
