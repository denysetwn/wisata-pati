<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Wisata extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = 'wisatas';
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'village_id', 'address', 'contact', 'desc'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function village()
    {
        return $this->belongsTo(Village::class, 'village_id');
    }

    public function kriteria()
    {
        return $this->hasOne(Kriteria::class, 'wisata_id');
    }

    public function rating()
    {
        return $this->hasMany(Rating::class, 'wisata_id');
    }
}
