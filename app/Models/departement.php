<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class departement extends Model
{
    protected $fillable = ['code','name','designation'];
    protected $guarded = ['id'];
      public function employee(): HasMany
    {
        return $this->hasMany(employee::class);
    }
}
