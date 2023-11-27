<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsBook extends Model
{
    use HasFactory;

    protected $table = 'MsBook';

    public function bookCategory(){
        return $this->belongsTo(LtBookCategory::class, 'IdBookCategory', 'IdBookCategory');
    }
    public function borrowBook(){
        return $this->hasOne(TrBorrowBook::class);
    }
}
