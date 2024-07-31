<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Mahasiswa extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'mahasiswas';
    protected $guarded = ['id'];
    // protected $fillable = [
    //     'nim','nama','tempat_lahir','tanggal_lahir', 'email', 'username', 'password', 'status',
    // ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function prodi(){
        return $this->belongsTo(Prodi::class, 'prodi_id');
    }
}
