<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $table = 'surat';

    protected $fillable = [
        'Tujuan_Surat', 
        'Tanggal_Surat', 
        'Nomor_Surat', 
        'Asal_Surat', 
        'Perihal', 
        'Jenis_Surat',
        'foto'
    ];
}