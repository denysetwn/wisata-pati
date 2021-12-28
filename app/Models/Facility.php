<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kriteria_id', 'parkir', 'masjid', 'kantin', 'toilet', 'wahana'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }
}
