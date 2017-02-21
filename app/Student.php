<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function schoolyear()
    {
        return $this->belongsTo(Schoolyear::class);
    }
}
