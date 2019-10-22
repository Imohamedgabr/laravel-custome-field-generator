<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Shop extends Model
{
    use NodeTrait;
    protected $guarded = [];
}
