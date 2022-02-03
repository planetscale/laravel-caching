<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Quote extends Model
{
    use HasFactory;

    public $timestamps = FALSE;
    protected $fillable = [
        'text',
        'name'
    ];

    protected static function booted()
    {
        static::saving(function() {
            Cache::forget('allQuotes');
        });
        
        static::deleted(function() {
            Cache::forget('allQuotes');
        });
    }
    
}
