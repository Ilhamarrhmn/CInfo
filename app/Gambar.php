<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $table = "gambars";
 
    protected $fillable = ['id', 'file', 'keterangan'];
}
