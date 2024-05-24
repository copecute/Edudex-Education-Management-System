<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CanBoTS_HoSo extends Model
{
    protected $table = 'tb_canbots_hoso';
    protected $primaryKey = 'id';
    protected $fillable = [
        'HoSo_ID',
        'NgayXet',
        'CanBoTS_ID',
        'GhiChu',
    ];
    public $timestamps = false;
}