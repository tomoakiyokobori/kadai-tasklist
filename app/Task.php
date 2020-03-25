<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
<<<<<<< HEAD
    protected $fillable = ['content','status', 'user_id'];
=======
    protected $fillable = ['content', 'user_id'];
>>>>>>> 56c3f64f58bf0554cc26fac7a1a41ed8bc47e827

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
