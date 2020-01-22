<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $pegawai = Pegawai::where('NIP', 'LIKE', "%$keyword%")
                ->orWhere('Nama', 'LIKE', "%$keyword%")
                ->orWhere('JenisKelamin', 'LIKE', "%$keyword%")
                ->orWhere('TempatLahir', 'LIKE', "%$keyword%")
                ->orWhere('TanggalLahir', 'LIKE', "%$keyword%")
                ->orWhere('Alamat', 'LIKE', "%$keyword%")
                ->orWhere('JenisPegawai', 'LIKE', "%$keyword%")
                ->orWhere('NPSN', 'LIKE', $request->session()->get('npsn'))
                ->latest()->paginate($perPage);
        } else {
            $pegawai = Pegawai::latest()->orWhere('NPSN',$request->session()->get('npsn'))->paginate($perPage);
        }

        return view('pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('pegawai.create')->with('NPSN', $request->session()->get('npsn'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'NIP' => 'required|max:20',
			'Nama' => 'required',
			'TempatLahir' => 'required',
			'TanggalLahir' => 'required',
			'Alamat' => 'required'
		]);
        $requestData = $request->all();

        Pegawai::create($requestData);

        return redirect('dashboard/pegawai')->with('flash_message', 'Pegawai added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id, Request $request)
    {
        $pegawai = Pegawai::findOrFail($id);

        return view('pegawai.show', compact('pegawai'))->with('NPSN', $request->session()->get('npsn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);

        return view('pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'NIP' => 'required|max:20',
			'Nama' => 'required',
			'TempatLahir' => 'required',
			'TanggalLahir' => 'required',
			'Alamat' => 'required'
		]);
        $requestData = $request->all();

        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update($requestData);

        return redirect('dashboard/pegawai')->with('flash_message', 'Pegawai updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Pegawai::destroy($id);

        return redirect('dashboard/pegawai')->with('flash_message', 'Pegawai deleted!');
    }
}
