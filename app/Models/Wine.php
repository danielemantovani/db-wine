<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wine extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function aromas() {
        return $this->belongsToMany(Aroma::class);
    }

    protected $fillable = ['winery', 'wine', 'location', 'image'];
}
