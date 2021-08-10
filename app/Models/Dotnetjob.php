<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Dotnetjob extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function getDaysSinceCreatedAttribute()
    {
        $now = Carbon::now();
        $diff = $this->created_at->diffInDays($now);
        if ($diff == 0)
            return 'Today';
        return $diff . 'd';
    }
}