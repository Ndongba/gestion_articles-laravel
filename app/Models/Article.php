<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable=[
            'nom',
            'description',
            'date_de_creation',
            'a_la_une',
            'url_image',
    ];
}
