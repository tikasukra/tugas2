<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa;

class MahasiswaController extends Controller
{
    //
    public function index(){
    	// mengambil data mahasiswa
    	$mahasiswa = Mahasiswa::all();

    	// mengirim data mahasiswa ke view mahasiswa
    	return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function tambah(){
    	return view('mahasiswa_tambah');
    }

    public function store(Request $request){
    	$this->validate($request, ['nim' => 'required',
    		'nama' => 'required',
    		'alamat' => 'required']);

    	Mahasiswa::create(['nim' => $request->nim,
    	'nama' => $request->nama,
    	'alamat' => $request->alamat]);

    	return redirect('/mahasiswa');
    }

    public function edit($id)
    {
    	$mahasiswa = Mahasiswa::find($id);
    	return view('mahasiswa_edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update($id, Request $request)
    {
    	$this->validate($request, [
    		'nim' => 'required',
    		'nama' => 'required',
    		'alamat' => 'required'
    	]);

    	$mahasiswa = Mahasiswa::find($id);
    	$mahasiswa->nim = $request->nim;
    	$mahasiswa->nama = $request->nama;
    	$mahasiswa->alamat = $request->alamat;
    	$mahasiswa->save();
    	return redirect('/mahasiswa');
    }

    public function delete($id)
    {
    	$mahasiswa = Mahasiswa::find($id);
    	$mahasiswa->delete();
    	return redirect('/mahasiswa');
    }

}
