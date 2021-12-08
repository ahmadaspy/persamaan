<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiSiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'siswa_id',
        'kuis_1',
        'kuis_2',
        'evaluasi',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
