<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ["name", "details"];

    public function attributes()
    {
        return $this->hasMany(Attribute::class);
    }
}
