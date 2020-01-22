<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
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
            $siswa = Siswa::where('NIS', 'LIKE', "%$keyword%")
                ->orWhere('Nama', 'LIKE', "%$keyword%")
                ->orWhere('JenisKelamin', 'LIKE', "%$keyword%")
                ->orWhere('TempatLahir', 'LIKE', "%$keyword%")
                ->orWhere('TanggalLahir', 'LIKE', "%$keyword%")
                ->orWhere('Alamat', 'LIKE', "%$keyword%")
                ->orWhere('NPSN', 'LIKE', $request->session()->get('npsn'))
                ->latest()->paginate($perPage);
        } else {
            $siswa = Siswa::latest()->orwhere('NPSN',$request->session()->get('npsn'))->paginate($perPage);
        }

        return view('siswa.siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('siswa.siswa.create')->with('NPSN', $request->session()->get('npsn'));
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
			'NIS' => 'required|max:8',
			'Nama' => 'required',
			'TempatLahir' => 'required',
			'TanggalLahir' => 'required',
			'Alamat' => 'required'
		]);
        $requestData = $request->all();

        Siswa::create($requestData);

        return redirect('dashboard/siswa')->with('flash_message', 'Siswa telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);

        return view('siswa.siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id, Request $request)
    {
        $siswa = Siswa::findOrFail($id);

        return view('siswa.siswa.edit', compact('siswa'))->with('NPSN', $request->session()->get('npsn'));
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
			'NIS' => 'required|max:8',
			'Nama' => 'required',
			'TempatLahir' => 'required',
			'TanggalLahir' => 'required',
			'Alamat' => 'required'
		]);
        $requestData = $request->all();

        $siswa = Siswa::findOrFail($id);
        $siswa->update($requestData);

        return redirect('dashboard/siswa')->with('flash_message', 'Siswa sudah terupdate!');
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
        Siswa::destroy($id);

        return redirect('dashboard/siswa')->with('flash_message', 'Siswa deleted!');
    }
}
