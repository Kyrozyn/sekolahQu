<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sekolah extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if (\App\Sekolah::where('NPSN', '=', $request->input('NPSN'))->count() > 0) {
            return response("npsnduplicate",403);
        }
        else{
            $data = New \App\Sekolah();
            $data->NPSN = $request->input('NPSN');
            $data->namasekolah = $request->input('namasekolah');
            $data->alamat = $request->input('alamat');
            $data->status = $request->input('status');
            if($data->save()){
                return response(['status' => true]);
            }
            else{
                return response(['status' => false]);
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sekolah = \App\Sekolah::find($id);
        return response($sekolah);
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
