<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class climatiseur extends Model
{
    use HasFactory;
  

    public function site(){

        return $this->belongsTo(Site::class);
    }
}