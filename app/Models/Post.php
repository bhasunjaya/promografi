<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sluggable;

    protected $guarded = ['id'];
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    public function malls()
    {
        return $this->belongsToMany('App\Models\Mall');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function raw()
    {
        return $this->belongsTo('App\Models\Raw');
    }
}
