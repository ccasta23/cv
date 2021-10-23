<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Framework extends Model
{

    public function programming_language()
    {
        return $this->belongsTo(ProgrammingLanguage::class);
    }

}
