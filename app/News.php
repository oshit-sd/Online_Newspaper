<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['id','date','linkt','heading','details','img','mmenu','subMenu','home','head','slide','lhead','popular','verti','rname','desi'];
}
