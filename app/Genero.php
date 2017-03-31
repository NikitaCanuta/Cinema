<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table= "generos";
    protected $fillable =['description'];
    protected $hidden =['status'];
}
