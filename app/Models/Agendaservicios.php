<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendaservicios extends Model
{
    use HasFactory;
    
    protected $table = 'v_agenda';
    protected $primarykey = 'id';
}
