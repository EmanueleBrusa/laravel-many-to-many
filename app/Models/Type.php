<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Type extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public static function generateslug($name)
    {
        return Str::slug($name, '-');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
