<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class userloga extends Model
{
    public function member():BelongsTo{
        return $this->belongsTo(Member::class);
    }
}
