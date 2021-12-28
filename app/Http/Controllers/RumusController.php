<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class RumusController extends Controller
{
    public function bobot($wisatas)
    {
        return $wisatas->map(function ($wisata) {
            $wisata->biaya = $this->bobotBiaya($wisata->kriteria->biaya);
            $wisata->facility = $this->bobotfacility($wisata->kriteria->facilitas);
            $wisata->jarak = $this->bobotjarak($wisata->kriteria->jarak);
            $wisata->keamanan = (float) $wisata->kriteria->keamanan;
            $wisata->kondisi = (float) $wisata->kriteria->kondisi;
            $rating = $wisata->rating->count() ? $wisata->rating->avg('rating') : null;
            $wisata->rating = $rating ? $this->bobotRating(round($rating, 1)) : null;
            return $wisata;
        });
    }

    public function bobotBiaya($biaya)
    {
        if ($biaya < 30000) return 0;
        elseif ($biaya >= 30000 && $biaya < 75000) return 0.5;
        elseif ($biaya >= 75000) return 1;
    }

    public function bobotfacility($facility)
    {
        if ($facility <= 2) return 0;
        elseif ($facility > 2 && $facility <= 4) return 0.5;
        elseif ($facility > 5) return 1;
    }

    public function bobotjarak($jarak)
    {
        if ($jarak <= 15) return 0;
        elseif ($jarak > 15 && $jarak <= 30) return 0.5;
        elseif ($jarak > 30) return 1;
    }

    public function bobotRating($rating)
    {
        if ($rating < 2) return 0;
        elseif ($rating >= 2 && $rating < 3.5) return 0.5;
        elseif ($rating >= 3.5) return 1;
    }


    public function normaliasai($wisatas)
    {
        return $wisatas->map(function ($wisata) use ($wisatas) {
            $wisata->biaya = $wisata->biaya == 0 ? 0 : $wisatas->min('biaya') / $wisata->biaya; //cost
            $wisata->facility = $wisatas->max('facility') == 0 ? 0 : $wisata->facility / $wisatas->max('facility'); //benefid
            $wisata->jarak = $wisata->jarak == 0 ? 0 : $wisatas->min('jarak') / $wisata->jarak;
            $wisata->keamanan = $wisatas->max('keamanan') == 0 ? 0 : $wisata->keamanan / $wisatas->max('keamanan');
            $wisata->kondisi = $wisatas->max('kondisi') == 0 ? 0 : $wisata->kondisi / $wisatas->max('kondisi');
            $wisata->rating = $wisata->rating ? ($wisata->max('rating') == 0 ? 0 : $wisata->rating / $wisata->max('rating')) : null;
            $wisata->nilai = $this->nilai($wisata);
            return $wisata;
        });
    }

    public function nilai($wisata)
    {
        if ($wisata->rating) {
            return ($wisata->biaya * 0.2) + ($wisata->facility * 0.3) + ($wisata->jarak * 0.15)
                + ($wisata->keamanan * 0.1) + ($wisata->kondisi * 0.1) + ($wisata->rating * 0.15);
        } else {
            return ($wisata->biaya * 0.25) + ($wisata->facility * 0.35) + ($wisata->jarak * 0.15)
                + ($wisata->keamanan * 0.1) + ($wisata->kondisi * 0.15);
        }
    }
}
