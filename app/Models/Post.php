<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'Post';

    public $timestamps = true;

    protected $fillable =[
        'Title',
        'Summary',
        'Body',
        'Slug',
    ];

    protected $dates = [
        'CreateDate',
        'LastUpdateDate'
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class, 'CategoryId', 'Id')->select(['Name']);
    }

    public function Tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function Author()
    {
        return $this->belongsTo(User::class, 'AuthorId', 'Id')->select(['Name']);
    }
}
