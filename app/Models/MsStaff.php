<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsStaff extends Model
{
    use HasFactory;

    protected $table = 'MsStaff';

    public function user(){
        return $this->belongsTo(User::class, 'IdUser', 'IdUser');
    }
}
