<?php

namespace App\Http\Controllers\Admin\Manager;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Facility;
use App\Models\Kriteria;
use App\Models\Rating;
use App\Models\Wisata;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Wisata $wisata, District $district)
    {
        $wisatas = $wisata->all();
        $districts = $district->all();
        return view('admin.layout.data', compact('wisatas', 'districts'));
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
        //
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
    public function update(Request $request, Wisata $wisata)
    {
        $w = $wisata->find($request->wisataid);
        $w->update($request->only([
            'name', 'village_id', 'address', 'contact', 'desc'
        ]));

        if ($request->hasFile('foto')) {
            if ($w->getFirstMediaUrl('fotos')) {
                $w->media()->delete();
            }
            $w->addMedia($request->file('foto'))->toMediaCollection('fotos');
        }

        $k = $w->kriteria;
        $k->update([
            'biaya' => $request->biaya,
            'fasilitas' => count($request->fasilitas),
            'jarak' => $request->jarak,
            'keamanan' => $request->keamanan,
            'kondisi' => $request->kondisi
        ]);

        $f = $k->facility;
        $f->update([
            'kriteria_id' => $k->id,
            'parkir' => in_array('parkir', $request->fasilitas) ? 1 : null,
            'masjid' => in_array('masjid', $request->fasilitas) ? 1 : null,
            'kantin' => in_array('kantin', $request->fasilitas) ? 1 : null,
            'toilet' => in_array('toilet', $request->fasilitas) ? 1 : null,
            'wahana' => in_array('wahana', $request->fasilitas) ? 1 : null,
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Wisata $wisata)
    {
        $w = $wisata->find($request->wisataid);
        $k = $w->kriteria;
        $k->facility->delete();
        $k->delete();
        if ($w->getFirstMediaUrl('fotos')) {
            $w->media()->delete();
        }
        $w->delete();
        
        return redirect()->back();
    }
}
