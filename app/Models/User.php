<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{

    use HasFactory, Notifiable;

    protected $casts = [
        'status' => 'boolean',
        'is_admin' => 'boolean',
        'email_verified_at' => 'datetime',

    ];

    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
        'phone',
        'address',
        'profile_photo_path'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function isActive(){
        return $this->status;
    }

    public function role(){
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function expense(){
        return $this->hasMany(Expense::class, 'user_id');
    }

    public function client(){
        return $this->hasMany(Client::class, 'user_id');
    }

    public function invoice(){
        return $this->hasMany(Invoice::class, 'user_id');
    }

    public function quotation(){
        return $this->hasMany(Quotation::class, 'user_id');
    }

}
