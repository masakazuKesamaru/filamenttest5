<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Member extends Model
{

    public function userloga():HasOne{
        return $this->hasOne(Userloga::class, 'member_id', 'id');
    }
}
