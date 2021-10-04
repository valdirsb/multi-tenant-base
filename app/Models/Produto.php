<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\TenantModels;

class Produto extends Model
{
    use HasFactory;
    use TenantModels;
    public $timestamps = false ;

    
}
