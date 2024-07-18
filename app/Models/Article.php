<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    public function commentaires(): HasMany
    {
        return $this->hasMany(Commentaire::class);
    }

}
