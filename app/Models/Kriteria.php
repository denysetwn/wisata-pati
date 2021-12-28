<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'wisata_id', 'biaya', 'fasilitas', 'jarak', 'keamanan', 'kondisi'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }

    public function facility()
    {
        return $this->hasOne(Facility::class, 'kriteria_id');
    }
}
