<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Canbots extends Authenticatable
{
    use Notifiable;

    protected $guard = 'canbots';

    protected $table = 'tb_canbots';
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'MaCBTS', // Tên cột đăng nhập
        'password', // Tên cột mật khẩu
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public $timestamps = false;
}
