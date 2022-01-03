<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuesioner extends Model
{
    protected $fillable= ['id_dosen', 'nama_mahasiswa','jurusan','npm','hasil1', 'hasil2', 'hasil3', 'hasil4', 'hasil5', 'hasil6', 'hasil7' ,'hasil8', 'hasil9', 'hasil10', 'hasil11', 'hasil12', 'hasil13', 'hasil14','hasil15','hasil16'];
}
