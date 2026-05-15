<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class employee extends Model
{
    protected $fillable = ['name','contry_code','age','phone','date','departement_id','salary'];
    protected $guarded = ['id'];
    public function departement(): BelongsTo
    {
        return $this->belongsTo(departement::class);
    }
}
