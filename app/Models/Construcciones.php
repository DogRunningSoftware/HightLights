<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Construcciones extends Model
{
    protected $fillable = [
        'nom_con',
        'fot1_con',
        'fot2_con',
        'fot3_con',
        'con_con',
        'txt_con',
        'lik_con',
        'vis_con',
        'des_con',
        'est_con'
    ];
    use HasFactory;
}
