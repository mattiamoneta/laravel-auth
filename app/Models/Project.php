<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'thumb',
    ];

    public static function assignSlug(string $title){
        return Str::slug($title, '-');
    }
}
