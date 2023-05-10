<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'position',
    ];

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
