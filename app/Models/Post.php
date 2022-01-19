<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'Post';

    public $timestamps = true;

    protected $fillable = [
        'Title',
        'Summary',
        'Body',
        'Slug',
    ];

    protected $hidden = [
        'CreateDate',
        'CategoryId',
        'AuthorId'
    ];

    protected $dates = [
        'CreateDate',
        'LastUpdateDate'
    ];

    protected $appends = ['Category', 'Author'];

    public function getCategoryAttribute()
    {
        $category = Category::where('Id', $this->CategoryId)->first()->Name;
        if (is_null($category))
            return null;

        return $category;
    }

    public function getAuthorAttribute()
    {
        $author = User::where('Id', $this->AuthorId)->first()->Name;
        if (is_null($author))
            return null;

        return $author;
    }

    public function Category()
    {
        return $this->belongsTo(Category::class, 'CategoryId', 'Id');
    }

    public function Tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function Author()
    {
        return $this->belongsTo(User::class, 'AuthorId', 'Id');
    }
}
