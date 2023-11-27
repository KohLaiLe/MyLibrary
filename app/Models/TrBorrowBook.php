<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrBorrowBook extends Model
{
    use HasFactory;

    protected $table = 'TrBorrowBook';

    public function book(){
        return $this->belongsTo(MsBook::class, 'IdBook', 'IdBook');
    }

    public function member(){
        return $this->belongsTo(MsMember::class, 'IdMember', 'IdMember');
    }
}
