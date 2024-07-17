<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'contenu',
        'nom_complet_auteur',
        'article_id'
    ];

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}

