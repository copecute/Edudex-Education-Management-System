<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class XetTuyenHoSo extends Model
{
    protected $table = 'tb_xettuyen';
    protected $primaryKey = 'id';
    protected $fillable = [
        'HoSo_ID',
        'HinhThuc',
        'DiemMon1',
        'DiemMon2',
        'DiemMon3',
        'TrangThai',
        'GhiChu',
    ];
    public $timestamps = false;
}