<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cours extends Model
{
    use HasFactory;
    protected $fillable=[
        "intitile",
        "coefficient",
        "salle_id",
    ];
}
