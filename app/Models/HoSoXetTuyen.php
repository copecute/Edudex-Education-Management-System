<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HoSoXetTuyen extends Model
{
    protected $table = 'tb_hoso';
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'MaHoSo',
        'HoDem',
        'Ten',
        'NgayThangNamSinh',
        'GioiTinh',
        'DanToc',
        'CCCD',
        'HKTT',
        'TrinhDo',
        'MaTinh',
        'TenTruong',
        'NamTotNghiep',
        'Email',
        'SDT',
        'DoiTuongUT',
        'KhuVucUT',
        'DiaChi',
        'NgayNop',
        'Nganh_ID',
    ];
    
    public $timestamps = false;
}
