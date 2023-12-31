<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $table='users';
     protected $primaryKey = 'id_user';

    protected $fillable = [
        'name',
        'nim_nik',
        'password',
        'file',
        'jenis_kelamin',
        'tgl_lahir',
        'tempat_kelahiran',
        'agama',
        'role',
        'perguruan_tinggi',
        'file_cv',
        'file_kk',
        'file_ktp',
        'file_cv',
        'surat_pengantar'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
