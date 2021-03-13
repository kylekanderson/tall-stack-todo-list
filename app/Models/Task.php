<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;


    /**
     * @param mixed $query
     * @return Builder
     */
    public function scopeCompleted($query): Builder
    {
        return $query->where('completed', true);
    }

    /**
     * @param mixed $query
     * @return Builder
     */
    public function scopeIncomplete($query): Builder
    {
        return $query->where('completed', false);
    }
}
