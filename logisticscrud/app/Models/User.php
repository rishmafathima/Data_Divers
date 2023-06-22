<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'tb_user';

    protected $fillable = [
        'u_email',
        'u_pwd',
        'u_type'
    ];
    
    public $timestamps = false;


}
