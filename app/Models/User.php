<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
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

    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public static array $rules = array(
        'name' => 'required',
        'email' => "required|email|unique:users",
        'password' => 'required|min:8',
    );

    public function adminlte_image(){
        // return 'https://picsum.photos/300/300';
        if($this->image != ""){
            return asset('assets/user_img/' . $this->image);
        }else{
            return 'https://picsum.photos/300/300';
        }
    }

    public function adminlte_desc(){
        return 'Administrador';
    }

    public function adminlte_profile_url(){
        return 'profile/' . $this->id;
    }
}
