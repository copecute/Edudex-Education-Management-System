<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';

    protected $table = 'tb_admin';
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'UserName', 'Password',
    ];

    protected $hidden = [
        'Password', 'remember_token',
    ];

    public $timestamps = false;
}