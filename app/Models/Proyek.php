<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_proyek';
    protected $table = 'proyek';

    protected $fillable = [
        'id_proyek',
        'nama_proyek'
    ];

    public $timestamps = false;

}
