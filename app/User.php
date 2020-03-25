<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
<<<<<<< HEAD
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    
    
=======
    
   
    public function tasks()
    {
        return $this->hasMany(Task::class);
    
    }
>>>>>>> 56c3f64f58bf0554cc26fac7a1a41ed8bc47e827
}
