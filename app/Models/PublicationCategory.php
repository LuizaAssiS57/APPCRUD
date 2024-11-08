<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicationCategory extends Model
{
    protected $table = "publication_category";

    protected $fillable = ["name"];
}
