<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Wisata $wisata, RumusController $rumus)
    {
        $wisatas = $wisata->all();
        $pembobotan = $rumus->bobot($wisatas);
        $normaliasasi = $rumus->normaliasai($pembobotan);
        $rangking = $normaliasasi->sortByDesc('nilai');
        $wisatas = $rangking;
        return view('home.layout.wisata', compact('wisatas'))
            ->with('i', 1);
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
    public function show(Wisata $wisata)
    {
        return Wisata::join('kriterias', function ($w) {
            $w->on('wisatas.id', '=', 'kriterias.wisata_id')
                ->join('facilities', 'kriterias.id', '=', 'facilities.kriteria_id');
        })->join('villages', function ($w) {
            $w->on('wisatas.village_id', '=', 'villages.id')
                ->join('districts', 'villages.district_id', '=', 'districts.id');
        })->select('villages.*', 'facilities.*', 'kriterias.*', 'wisatas.*')
            ->where('wisatas.id', $wisata->id)->first()->toArray();
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
