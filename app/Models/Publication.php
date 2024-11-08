<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $table = "publication";

    public function category() {
        return $this->belongsTo(PublicationCategory::class, "category_id");
    }

    public function comments() {
        return $this->hasMany(Comment::class,"publication_id");
    }
}
