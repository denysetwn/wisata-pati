<?php

namespace App\Http\Controllers\Admin\Manager;

use App\Http\Controllers\Controller;
use App\Imports\Unggah;
use App\Models\District;
use App\Models\Facility;
use App\Models\Kriteria;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UnggahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(District $district)
    {
        $districts = $district->all();
        return view('admin.layout.unggah', compact('districts'));
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
    public function store(Request $request, Wisata $wisata, Kriteria $kriteria, Facility $facility)
    {
        $w = $wisata->create([
            'name' => $request->name,
            'village_id' => $request->village,
            'address' => $request->address,
            'contact' => $request->contact,
            'desc' => $request->desc,
        ]);

        if (isset($request->foto)) {
            $w->addMedia($request->file('foto'))->toMediaCollection('fotos');
        }

        if ($w) {
            $k = $kriteria->create([
                'wisata_id' => $w->id,
                'biaya' => $request->biaya,
                'fasilitas' => count($request->fasilitas),
                'jarak' => $request->jarak,
                'keamanan' => $request->keamanan,
                'kondisi' => $request->kondisi,
            ]);

            $facility->create([
                'kriteria_id' => $k->id,
                'parkir' => in_array('parkir', $request->fasilitas) ? 1 : null,
                'masjid' => in_array('masjid', $request->fasilitas) ? 1 : null,
                'kantin' => in_array('kantin', $request->fasilitas) ? 1 : null,
                'toilet' => in_array('toilet', $request->fasilitas) ? 1 : null,
                'wahana' => in_array('wahana', $request->fasilitas) ? 1 : null,
            ]);  
        }
        return redirect()->route('admin.data');
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

    public function unggah(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:10000|mimes:xlsx,csv'
        ], [
            'file.required' => 'File belum anda pilih, Silahkan pilih file anda terlebih dahulu!!',
            'file.mimes' => 'File yang anda pilih harus berformat xlxs',
            'file.max' => 'File yang anda pilih melebihi batas makasimal 10 Mb!!',
        ]);
        $file = $request->file('file');
        $import = Excel::import(new Unggah, $file);
        return redirect()->back();
    }
}
