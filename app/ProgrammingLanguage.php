<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class ProgrammingLanguage extends Model
{

    use Sluggable; //Trait

    public function frameworks()
    {
        return $this->hasMany(Framework::class);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => true
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
