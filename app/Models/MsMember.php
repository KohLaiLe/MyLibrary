<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsMember extends Model
{
    use HasFactory;

    protected $table = 'MsMember';

    public function user(){
        return $this->belongsTo(User::class, 'IdUser', 'IdUser');
    }

    public function borrowBook(){
        return $this->belongsTo(TrBorrowBook::class, 'IdBorrowBook', 'IdBorrowBook');
    }
}
