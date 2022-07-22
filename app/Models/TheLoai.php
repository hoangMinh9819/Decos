<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    public $timestamps = false;
    protected $fillable = [
        '', '', '', '', ''
    ];
    protected $primaryKey = 'ID_THE_LOAI';
    protected $table = 'the_loai';
}
