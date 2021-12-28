<?php

namespace App\Imports;

use App\Models\Facility;
use App\Models\Kriteria;
use App\Models\Wisata as ModelsWisata;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Wisata implements ToCollection, WithHeadingRow
{

    /**
    * @param Collection $collection
    */
    public function collection(Collection $collections)
    {
        foreach ($collections as $key => $c) {
            $wisata = ModelsWisata::updateOrCreate([
                'name' => $c['name'],
                'village_id' => $c['village_id'],
                'address' => $c['alamat'],
                'contact' => $c['contact'],
                'desc' => $c['desc'],
            ]);
            
            if ($wisata) {
                $i = 0;
                $c['parkir'] ? $i++ : $i = $i; $c['masjid'] ? $i++ : $i = $i;
                $c['kantin'] ? $i++ : $i = $i; $c['toilet'] ? $i++ : $i = $i;
                $c['wahana'] ? $i++ : $i = $i; $facility = $i;
                
                $kriteria = Kriteria::updateOrCreate([
                    'wisata_id' => $wisata->id,
                    'biaya' => $c['biaya'],
                    'fasilitas' => $facility,
                    'jarak' => $c['jarak'],
                    'keamanan' => $c['keamanan'],
                    'kondisi' => $c['kondisi'],
                ]);

                Facility::updateOrCreate([
                    'kriteria_id' => $kriteria->id,
                    'parkir' => $c['parkir'],
                    'masjid' => $c['masjid'],
                    'kantin' => $c['kantin'],
                    'toilet' => $c['toilet'],
                    'wahana' => $c['wahana'],
                ]);
            }
        }
    }
}
