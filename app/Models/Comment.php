<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    protected $fillable = ["publication_id", "comment"];

    public function plublication() {
        return $this->belongsTo(Publication::class);
    }
}
