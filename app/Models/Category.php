<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'Category';

    public $timestamps = true;

    protected $fillable = [
        'Name',
        'Slug'
    ];

    public function Posts()
    {
        return $this->hasMany(Post::class, 'CategoryId', 'Id');
    }
}
