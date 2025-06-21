<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;

class Book extends Model
{
    protected $table = "books";
    protected $fillable = [
        'name',
        'author_name',
        'image_id',
    ];

    public function image() {
        return $this->belongsTo(Image::class, 'image_id', 'id');
    }

    #[Scope]
    protected function getAll(Builder $builder){
        $builder->select([
            'id',
            'name',
            'author_name',
            'image_id'
        ]);
    }
    #[Scope]
    protected function withImage(Builder $builder)
    {
        $builder->with('image:id,path');
    }
}
